<?php

class Contacto {
 
     //atributos

    private $nombreApellido;
    private $correoElectronico;
    private $asunto;

   // metodos SETTERS : Asigna un valor a la propiedad privada

   public function setNombreApellido($nuevoDatos) {
      
    if (is_string($nuevoDatos) && strlen($nuevoDatos)>0) {

        $this->nombreApellido=$nuevoDatos;
        
     }

     else {
        echo "Ingreso de la informacion no valido! Verifica nuevamente!";
     }

   }


   public function setCorreoElectronico($correo) {
      
    if (is_string($correo) && strlen($correo)>0) {

        $this->correoElectronico=$correo;
        
     }

     else {
        echo "Ingreso de la informacion no valido! Verifica nuevamente!";
     }

   }



      public function setAsunto($asuntoNuevo) {
      
    if (is_string($asuntoNuevo) && strlen($asuntoNuevo)>0) {

        $this->asunto=$asuntoNuevo;
        
     }

     else {
        echo "Ingreso de la informacion no valido! Verifica nuevamente!";
     }

   }

   // metodos GET , Getter: Obtiene el valor de la propiedad privada

     public function getNombreApellido() {
        return $this->nombreApellido;
    }

      public function getCorreoElectronico() {
        return $this->correoElectronico;
    }

      public function getAsunto() {
        return $this->asunto;
    }


}

////// -------------

if ($_POST) {

   $datos1=$_POST['txtNombreApellido'];
   $datos2=$_POST['txtcorreo'];
   $datos3=$_POST['txtAsunto'];


 $contacto= new Contacto();
 $contacto->setNombreApellido($datos1);
 $contacto->setCorreoElectronico($datos2);
 $contacto->setAsunto($datos3);

 echo "MENSAJE ENVIADO CON EXITO : ".$contacto->getNombreApellido();

}




?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Formulario de Contacto Personal</h4>
                </div>
                <div class="card-body">
                    <form action="practica11.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ej: Luis Oliveros" required name="txtNombreApellido">
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo Electrónico</label>
                            <input type="text" class="form-control" id="correo" placeholder="nombre@ejemplo.com" required  name="txtcorreo">
                        </div>

                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="asunto" placeholder="Motivo de tu mensaje" required  name="txtAsunto">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
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