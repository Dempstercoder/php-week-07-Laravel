<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ["first_name", "last_name","address_1", "address_2", "town", "postcode", "telephone", "email" ];


    public function fullName()
    {
       return "{$this->first_name} {$this->last_name}";
    }

    public function fullAddress()
    {
       return "{$this->address_1} {$this->address_2} {$this->town} {$this->postcode}";
    }

    // This hows in human-readable form, how long ago a blog-post was posted
    public function relativeDate()
    {
    return $this->created_at->diffForHumans();
    }


    public function animals()
    {
    // use hasMany relationship method
    return $this->hasMany(Animal::class);
    }
    // Now we can easily access a collection of Animal objects for an owner object instance
    // using its new Animals property.


    public static function haveWeBananas($number)
    {
    if ($number === 0) {
        return "No we have no bananas";
    }

    return "Yes we have {$number} bananas";
    }
}

// No constructor and no defining properties inside a model. Laravel takes care of all of that.

// $owner=Owners::find(5);
// $owner->fullName();
