
<?php


if (isset($_POST["registra"])) {
    $nombre = $_POST["nombre"];
    $empleados = $_POST["empleados"];
    $web = $_POST["web"];
    $telefono = $_POST["telefono"];
    altaempresas($nombre, $empleados, $web, $telefono);
}


function altaempresas($nombre, $empleados, $web, $telefono)
{
    require_once ("config.php");
    require_once ("connection.php");
    

session_start();

$sql=$conn->prepare('INSERT INTO empresas (nombre, empleados, web, telefono)
VALUES (:nombre,:empleados,:web,:telefono)');


$sql->bindValue(":nombre", $nombre);
$sql->bindValue(":empleados", $empleados);
$sql->bindValue(":web", $web);
$sql->bindValue(":telefono", $telefono);
$sql->execute();
echo "Nueva empresa registrada correctamente<br>";
$conn=null;
echo '<a href="index.html"><button value="volver">Volver</button></a>';

}
?>
    
