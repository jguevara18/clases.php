<?php


try{
    $resultado = 20/0;
    echo $resultado;
}catch(Throwable $e){
    //echo "ERROR: ".$e->getMessage();
    //echo $e->getCode();
    //echo $e->getFile();
    //echo $e->getLine();
    //echo $e->getTrace();
    
}