<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public $timestamps = false;

    // using the belongsToMany() method
    // as it's a many-to-many relationship
    public function animals()
    {
    return $this->belongsToMany(Animal::class);
    }
    

    public static function fromStrings(array $strings) 
    {
    return collect($strings)->map(fn($str) => trim($str))
                            ->unique()
                            ->map(fn($str) => Treatment::firstOrCreate(["name" => $str]));
    }
}
