<?php
session_start();
$usuario= $_SESSION['usuario'];

if(!isset($usuario)){
    header("location: index.php");
}
?>
