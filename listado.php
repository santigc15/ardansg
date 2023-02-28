<?php

require_once ("config.php");
require_once ("connection.php");

$sql = $conn->query("SELECT * FROM empresas");



// Mostrar los resultados en una tabla HTML
echo '<table border="1">';
echo '<tr><th>ID</th><th>Nombre</th><th>Empleados</th><th>web</th><th>Telefono</th><th>Editar</th><th>Eliminar</th></tr>';




while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {

    echo '<tr>';
    echo '<td>' . $fila['id'] . '</td>';
    echo '<td>' . $fila['nombre'] . '</td>';
    echo '<td>' . $fila['empleados'] . '</td>';
    echo '<td><a href="https://' . $fila['web'] . '" >'. $fila['web'] .'</a></td>';
    echo '<td>' . $fila['telefono'] . '</td>';
    echo '<td><img src="./img/pen-to-square-solid.svg" style="width:18px; height:18px"></td>';
    echo '<td><img id="'. $fila['id'] .'" src="./img/trash-solid.svg" style="width:16px; height:16px"></td>';
    echo '</tr>';
}

echo '</table>';

// Cerrar la conexión a la base de datos
$conn = null;

?>


