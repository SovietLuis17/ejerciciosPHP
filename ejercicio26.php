<?php

class Persona {

    //atributos o caracteristicas

    public $fullName;
    public $email;
   

    //metodo constructor 

    public function __construct($newFullName,$newEmail) {
        $this->fullName= $newFullName;
        $this->email= $newEmail;
  

    }

    public function viewInfo() {
        echo "DATOS : <br/> ".$this->fullName."<br/> ".$this->email."<br/> ";
    }
     


}

//instanciaciom
$objPerson = new Persona("Luis Alfredo","luissoliveros17@gmail.com");
$objPerson->viewInfo();




?>