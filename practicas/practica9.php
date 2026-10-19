<?php


class carro {


    // atributos o propiedades
    public $s_carroceria;
    public $modelo;
    public $marca;

    // metodos o comportamiento

    public function asignarDatos($serial,$modeloc,$marcac) {
        
        $this->s_carroceria=$serial;
        $this->modelo=$modeloc;
        $this->marca=$marcac;
    }

    public function mostrarInformacion() {

        echo "SERIAL DE CARROCERIA : ".$this->s_carroceria."<br/> MODELO :  ".$this->modelo." <br/> MARCA :  ".$this->marca;
    }



}


$carroUno = new carro();
$carroUno->asignarDatos("ALFA-1674443545-RBV", "ORINOCO ","WARAIRA");
$carroUno->mostrarInformacion();




?>