<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Animal extends Model
{
    use HasFactory;

    protected $fillable = ["name", "type","date_of_birth", "weight", "height", "biteyness"];

    // setup the other side of the relationship
    // use singular, as a animal only has one owner
    public function owner()
    {
    // a animal belongs to an owner
    return $this->belongsTo(Owner::class);
    }

/*
    public function dangerous()
    {
    return biteyness > 3 ? true : false; //how to correct this?
    }
*/


    // Now all of our Animal object instances will have an owner property that gives
    // back the related Owner object.


    // use the belongsToMany() method again
    public function treatments()
    {
    return $this->belongsToMany(Treatment::class);
    }


    // just accept an array of strings
    // we don't want to pass request in as there's no
    // reason models should know about about the request
    public function setTreatments(array $strings) : Animal  //this adds the treatments to an animal
    {
        $treatments = Treatment::fromStrings($strings);
        // we're on an animal instance, so use $this
        // pass in collection of IDs
        $this->treatments()->sync($treatments->pluck("id"));
        // return $this in case we want to chain
        return $this;
    }
}