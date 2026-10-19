<?php

$tareaChromaLab = ["Programacion","Curso PHP","Diseño Grafico"];
$tareaPersonal = ["Limpiar","Leer","Caminar","Estudiar"];

$todos = [["tarea" => $tareaChromaLab, "estatus" => "No completado"],
         ["tarea" => $tareaPersonal, "estatus " => "No completado"]
];

echo $todos[0]["tarea"][0]."<br>";
echo $todos[0]["estatus"];


?>