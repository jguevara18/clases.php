<?php



try{
    $pet = readline("QUE QUIERES ADOPTAR? ");
    if($pet!= "michi" && $pet != "conejo")
        throw new Exception("lo sentimos, no tenemos $pet");
    echo "FELICIDADES, ADOPTASTE UN $pet";
}catch(\Throwable $th){
    echo "ERROR: ".$th->getMessage();

}