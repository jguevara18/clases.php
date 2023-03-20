<?php


namespace App\Clases;
use App\Traits\Pet;


class Michi{

    use Pet;
    public function sayMeow(){
        return "Meow";
    }
    public function scratch(){
        return "Scratch";
    }
}