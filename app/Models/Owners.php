<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    use HasFactory;


    public function fullName()
    {
       return "{$this->first_name} {$this->last_name}";
    }

    public function fullAddress()
    {
       return "{$this->address_1} {$this->address_2} {$this->town} {$this->postcode}";
    }

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
