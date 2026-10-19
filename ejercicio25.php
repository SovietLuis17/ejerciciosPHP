<?php

//clase en php

class persona{


    //atributo
    public $nombre;
    private $edad;
    protected $altura;

    //metodo
    public function asignarNombre($nuevoNombre) {
        
        $this->nombre=$nuevoNombre;

    }

    public function mostrarNombre() {
        echo "Hola soy ".$this->nombre;
    }

}


class trabajador extends persona {
   
  public $puesto;

  public function presentarse() {
     echo "Hola soy ".$this->nombre." y mi puesto es : ".$this->puesto."<br/>";
  }


}

/*
//instanciar, crear objeto de una clase

$objPersona= new persona();
$objPersona->asignarNombre("Jose Luis");

$objPersona1= new persona();
$objPersona1->asignarNombre("Luis Alfredo");

echo "Objeto 1 :".$objPersona->nombre."<br/>";
echo "Objeto 2 :".$objPersona1->nombre."<br/>";
//echo $objPersona->edad; // private
//echo $objPersona->altura; // protegido

$objPersona1->mostrarNombre();

*/

$objTrabajador = new trabajador();
$objTrabajador->asignarNombre("Javins");
$objTrabajador->puesto="Albañil";
$objTrabajador->presentarse();
?>