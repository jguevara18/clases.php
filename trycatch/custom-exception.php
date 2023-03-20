<?php


class MichiException extends Exception{

  
    public function getMeow(){
        return "MIAU";
    }
}
class ConejoException extends Exception{
    public function getRabbit(){
        return "Soy un conejito";
    }
}
$exception = readline("Exception a lanzar: ");
try{
    
    if($exception == "michi")
        throw new MichiException("michi incorrecto");
    else
        throw new ConejoException("conejo incorrecto");
}catch(MichiException $e){
    echo $e->getMessage()."\n";
    echo $e->getMeow()."\n";
    
}catch(ConejoException $e){
    echo $e->getMessage()."\n";
    echo $e->getRabbit()."\n";
}finally{
    echo "\n ESTO PASA SI O SI \n";
}