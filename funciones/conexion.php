<?php
$host_db = "localhost:3308";
$user_db = "root";
$pass_db = "061203";
$db_name = "Proyecto_final";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no está funcionando, verifica el error</h1>";
}
?>
