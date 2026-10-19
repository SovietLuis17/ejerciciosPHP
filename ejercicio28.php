<?php

//conexion a la base de datos

$servidor="localhost"; // o esta direcion ip 127.0.0.1
$user="root";
$password="";

try {

 $conexion= new PDO("mysql:host=$servidor;dbname=album",$user, $password );
 $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'prueba3', 'foto3.jpg');";

 $conexion->exec($sql);



 echo "Conexion establecida";

}catch(PDOException $error) {
  echo "Conexion erronea  : $error";
}



?>