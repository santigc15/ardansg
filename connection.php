<?php


require_once ("config.php");
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    echo "Conectado a $dbname en $host correctamente.";
    echo"<br>";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}



?>
