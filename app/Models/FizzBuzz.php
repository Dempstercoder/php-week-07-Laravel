<?php

namespace App\Models;

class FizzBuzz {
    private $dictionary = [
        5 => "Buzz", // numbers represent the $key, "buzz" and "fizz" are the $value
        3 => "Fizz",
    ];
    


    public function forNumber($number) // $number accesses argument 1 in brackets are forNumber(1)from FizzBuzzTest.php
    {
    foreach($this->dictionary as $key => $value) { // $this is iterating over the array (array made above).
        if($number%3 === 0 && $number%5 === 0){ // if 1 is divisible by 1 and equal to 0, return "1", if 
            return "{$value}";
        }
        return "{$number}"; // return string
        }
    }
}

// else if fizz is not % by $key number then return $value

/*
public function forNumber($number) // $number accesses argument 1 in brackets are forNumber(1)from FizzBuzzTest.php
{
    foreach($this->dictionary as $key => $value) { // $this is iterating over the array (array made above).
        if($number%$key === 0){ // if 1 is divisible by 1 and equal to 0, return "1", if 
            return $value;
        }
        return "{$number}"; // return string
*/

