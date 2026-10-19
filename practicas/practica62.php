<?php

$usuarios = [
    ["nombre" => "Luis",
    "Apellido" => "Oliveros",
    "Username" => "Corso17",
    "correo" => "luissoliveros17@gmail.com"
],
  ["nombre" => "Jose",
    "Apellido" => "Perez",
    "Username" => "Lucas13",
    "correo" => "lucas13@gmail.com"] 
];

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Username</th>
        <th>Correo</th>
      </tr>";

foreach ($usuarios as $usuario) {
    echo "<tr>";
    echo "<td>" . $usuario["nombre"] . "</td>";
    echo "<td>" . $usuario["Apellido"] . "</td>";
    echo "<td>" . $usuario["Username"] . "</td>";
    echo "<td>" . $usuario["correo"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>