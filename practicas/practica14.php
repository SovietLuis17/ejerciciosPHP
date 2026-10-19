<?php
class Libro {
    public $titulo;
    public $autor;
    public $precio;

    // Constructor con tres argumentos
    public function __construct($titulo, $autor, $precio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
        echo "Libro creado: $this->titulo por $this->autor\n";
    }

    public function obtenerDetalles() {
        return "Título: " . $this->titulo . ", Autor: " . $this->autor . ", Precio: $" . $this->precio;
    }
}

// Crear un nuevo objeto Libro pasando tres argumentos
$miLibro = new Libro("Cien años de soledad", "Gabriel García Márquez", 25.99);

// Usar el método para mostrar detalles
echo $miLibro->obtenerDetalles(); // Salida: Título: Cien años de soledad, Autor: Gabriel García Márquez, Precio: $25.99
?>