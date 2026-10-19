<?php

class Cliente { // clase

// propiedades

     private $firstName;  // modificador de acceso private
     private $lastName;
     private $email;


// metodos Setters 
# son metodos publicos para modificar o agregar informacion a una propiedad privada o atributo privado
    public function setFirstName($newFirstName) {
       $this->firstName= $newFirstName;
    }

    public function setLastName($newLastName) {
         $this->lastName= $newLastName;
    }

    public function setEmail($newEmail) {
         $this->email= $newEmail;
    }

 // metodos getters , para mostrar la informacion del atributo privado

    public function getFirsName() {
        return $this->firstName;
    }
    
    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }



}


// fin de de la clase

#instanciamos la clase 

$clienteUno = new Cliente();
$clienteUno->setFirstName("Luis");
$clienteUno->setLastName("Oliveros");
$clienteUno->setEmail("luissoliveros17@gmail.com");

echo "Nombre y apellido : ".$clienteUno->getFirsName()." ".$clienteUno->getLastName();


?>