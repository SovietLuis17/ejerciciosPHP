<?php

// metodos estaticos

class unaClase {

  public static function unMetodo() {
    echo "Hola soy un metodo estatico";
  }

}

// llamado normal
$obj=new unaClase();
$obj->unMetodo();

// usando el metodo estatico

unaClase::unMetodo();


?>