<?php


try{
    $resultado = 20/0;
    echo $resultado;
}catch(Throwable $e){
    //echo "ERROR: ".$e->getMessage();
    echo "ALGO SALIO MAL CON LA DIVISION";
}
echo "<br>";
echo "ESTO PASA SI O SI";








