<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');
$nombre_user = $_POST['usuario'];

$buscarusuario = "SELECT * FROM alumnos WHERE usuario = '$nombre_user'";
$resultado = $conexion->query($buscarusuario);
$count = mysqli_num_rows($resultado);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <?php
                if ($count == 1) {
                    echo "<h1 class='center-align'>El usuario ya está registrado</h1>";
                    echo "<div class='center-align'><a class='btn waves-effect waves-light' href='../Registro.php'>Nuevo registro</a></div>";
                } else {
                    mysqli_query($conexion, "INSERT INTO alumnos (
                         usuario,nombre, apellido_paterno, apellido_materno, carrera, semestre, no_cuenta, telefono, email, contraseña
                    ) VALUES (
                        '$_POST[usuario]',
                        '$_POST[nombre]',
                        '$_POST[apellido_paterno]',
                        '$_POST[apellido_materno]',
                        '$_POST[carrera]',
                        '$_POST[semestre]',
                        '$_POST[no_cuenta]',
                        '$_POST[telefono]',
                        '$_POST[email]',
                        '$_POST[contraseña]'
                    )");
                    echo "<h1 class='center-align'>Usuario creado con éxito</h1>";
                    echo "<div class='center-align'><a class='btn waves-effect waves-light' href='../Registro.php'>Puedes generar un Nuevo registro</a></div>";
                    echo "<div class='center-align'><a class='btn waves-effect waves-light' href='../inicio.php'>Ver registros</a></div>";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
