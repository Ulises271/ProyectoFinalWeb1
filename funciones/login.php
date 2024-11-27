<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Proteger contra inyecciones SQL
$stmt = $conexion->prepare("SELECT COUNT(*) as contar FROM alumnos WHERE usuario = ? AND contraseña = ?");
$stmt->bind_param("ss", $usuario, $contraseña);
$stmt->execute();
$resultado = $stmt->get_result();
$array = $resultado->fetch_assoc();

if ($array['contar'] > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: ../inicio.php");
    exit();
} else {
    header("Location: ../indexError.php?error=1");
    exit();
}

$stmt->close();
$conexion->close();
?>
