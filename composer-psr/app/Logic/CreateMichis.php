<?php


use App\Classes\Michi;
use App\Classes\MichisAdoptados;

function createMichis(){
    $mr_michi = new Michi("Mr. Michi", "Blanquito", 16);
    $mr_michi_adopted = new MichisAdoptados("Mr. michi", new DateTime("2023-01-01"), "Jesus");
    echo $mr_michi->sayMeow(). "ME ADOPTO{$mr_michi_adopted->getAdopted_by()}";
}