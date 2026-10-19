<?php

//conexion a la base de datos

$servidor="localhost"; // o esta direcion ip 127.0.0.1
$user="root";
$password="";

try {

 $conexion= new PDO("mysql:host=$servidor;dbname=album",$user, $password );
 $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 $sql="SELECT * FROM `fotos`";

 $sentencia=$conexion->prepare($sql);
 $sentencia->execute();

 $resultado = $sentencia->fetchAll();

 print_r($resultado);

 foreach($resultado as $foto) {
  //print_r($foto);
  echo $foto['nombre']."<br/>";
 }




 echo "Conexion establecida";

}catch(PDOException $error) {
  echo "Conexion erronea  : $error";
}



?>