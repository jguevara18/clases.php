<?php

require("vendor/autoload.php");

class Michi {
    protected $patas = [];
    protected $color;

    public function __construct(string $color) {
        $this->color = $color;
        for($i=0;$i<4;$i++)
        $this->patas[$i] = new PataDeMichi();
    }
}

class PataDeMichi {
    protected $nail = 4;
    protected $description = "tiene manchas";

    public function get_description():string {
        return $this->description;
        
    }
}
$casa_de_michi = array(
    "nombre" => "michilango",
    "ubicacion" => [
        "pais"=> "mexico",
        "estado" => "michoacan",
        "colonia" => "doctores",
        "numero" => 27
        ],
        "numero_de_michi"=>3,
        "michis" => [
            new Michi("rojo"),
            new Michi("azul"),
            new Michi("verde")
            ]

);
dd($casa_de_michi);