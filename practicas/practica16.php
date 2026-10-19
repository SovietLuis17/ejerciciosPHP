<?php

class Contacto {

   public $nombre;
   public $edad;
   public $ciudad;

   public function __construct($nombre,$edad,$ciudad) {
        $this->nombre= $nombre;
        $this->edad= $edad;
        $this->ciudad= $ciudad;
   }

   public function saludar() {
    return "Hola me llamo : ". $this->nombre .", tengo una edad de :  ". $this->edad ." años y vivo en la ciudad de  : " . $this->ciudad;
   }


}


if ($_POST) {

 $name= $_POST['txtNombre'];
 $age= $_POST['txtEdad'];
 $city= $_POST['txtCiudad'];
 
 $contacto = new Contacto($name,$age,$city);
 echo $contacto->saludar();

 
 }




?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludador Personalizado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body  class="bg-light">
<!--   CONTENEDORES EXTERNOS DEL FORMULARIO-->
<div class="container mt-5">
    <div lass="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
<!--   HEADER DEL FORMULARIO-->
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Ingresa tus datos : </h4>
                </div>
         <!--   CUERPO DEL COMENTARIO-->       
                <div class="card-body">
                    <form action="practica16.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ej: Luis Oliveros" required name="txtNombre">
                        </div>

                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="text" class="form-control" id="edad"  required  name="txtEdad">
                        </div>

                        <div class="mb-3">
                            <label for="ciudad" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" id="asunto"  required  name="txtCiudad">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>