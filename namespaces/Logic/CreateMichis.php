<?php
require("Classes/MichisDisponibles/Michi.php");
require("Classes/MichisAdoptados/Michi.php");

use MichisDisponibles\Michi;
use MichisAdoptados\Michi as MichisAdoptado;





$mrmichi = new Michi("Mr. Michi", "Blanquito", 16);
$mrmichisancio = new Michi("Mr. Michisancio", "Naranjita", 14);
$michales = new Michi("Michales", "Negrito", 15);

$mrmichi_adopted = new MichisAdoptado("Mr Michi", new DateTime("2022-04-21"), "retaxito");
$michisancio_adopted = new MichisAdoptado("Michisancio", new DateTime("2023-01-21"), "Juanito");
$michales_adopted = new MichisAdoptado("Michales", new DateTime("2022-02-21"), "pedrito");




