<?php

class Persona {
    private $nombre; // Propiedad privada

    // Setter: Asigna un valor a la propiedad privada
    public function setNombre($nuevoNombre) {
        // Aquí podrías agregar validaciones, por ejemplo:
        if (is_string($nuevoNombre) && strlen($nuevoNombre) > 0) {
            $this->nombre = $nuevoNombre;
        } else {
            echo "Error: El nombre debe ser una cadena no vacía.\n";
        }
    }

    // Getter: Obtiene el valor de la propiedad privada
    public function getNombre() {
        return $this->nombre;
    }
}

$persona = new Persona();
$persona->setNombre("Ana"); // Usa el setter para asignar "Ana"
echo $persona->getNombre(); // Usa el getter para obtener "Ana"
// $persona->nombre = "Juan"; // Esto daría un error si la propiedad es privada



?>