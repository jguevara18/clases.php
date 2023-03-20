<?php
require ("vendor/autoload.php");

use App\Clases\Perritu;
use App\Clases\Michi;



$firulais = new Perritu();
$mrmichi= new Michi();

echo $firulais->bark()."\n";
echo $firulais->drool()."\n";
echo $firulais->play()."\n";
echo $mrmichi->sayMeow()."n";
echo $mrmichi->scratch()."\n";
echo $mrmichi->sleep()."\n";