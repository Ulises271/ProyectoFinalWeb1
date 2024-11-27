<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

$registroEliminado = $_POST['usuario'];

$stmt = $conexion->prepare("DELETE FROM alumnos WHERE usuario = ?");
$stmt->bind_param("s", $registroEliminado);

if ($stmt->execute()) {
    echo "<div style='text-align: center; margin-top: 50px;'>";
    echo "<h1 style='color: green;'>Usuario eliminado con éxito.</h1>";
    echo "<a href='../eliminarUsuario.php' class='btn waves-effect waves-light'>Eliminar otro usuario</a>";
    echo "<a href='../inicio.php' class='btn waves-effect waves-light'>Regresar al inicio</a>";
    echo "</div>";
} else {
    echo "<div style='text-align: center; margin-top: 50px;'>";
    echo "<h1 style='color: red;'>Error al eliminar el usuario: " . $stmt->error . "</h1>";
    echo "<a href='../eliminarUsuario.php' class='btn waves-effect waves-light'>Intentar nuevamente</a>";
    echo "</div>";
}

$stmt->close();
$conexion->close();
?>
