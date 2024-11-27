<?php
require 'funciones/autenticar.php';
require 'funciones/conexion.php';
mysqli_set_charset($conexion, 'utf8');

$consulta_sql = "SELECT * FROM alumnos";
$resultado = $conexion->query($consulta_sql);
$count = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">


   

    <!-- Incluye el CSS de Materialize original -->
    <link href="materialize.min.css" rel="stylesheet">

    <!-- Incluye tu CSS personalizado -->
    <link href="materialize.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h2>Lista de Alumnos</h2>
        <?php if ($count > 0): ?>
            <table class="striped highlight responsive-table">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Carrera</th>
                        <th>Semestre</th>
                        <th>numero de cuenta</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td><?= $row['usuario'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['apellido_paterno'] ?></td>
                        <td><?= $row['apellido_materno'] ?></td>
                        <td><?= $row['carrera'] ?></td>
                        <td><?= $row['semestre'] ?></td>
                        <td><?= $row['no_cuenta'] ?></td>
                        <td><?= $row['telefono'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['contraseña'] ?></td>
                        <td><?= $row['fecha_registro'] ?></td>
                    </tr>
                    <?php endwhile; ?>
                   </tbody>
            </table>

        <?php endif; ?>

        <h1><a class="btn waves-effect waves-light" href="eliminarUsuario.php">Eliminar Usuario</a></h1>
        <h1><a class="btn waves-effect waves-light" href="Registro.php">Registrar Usuario</a></h1>
        <h1><a class="btn waves-effect waves-light" href="funciones/salir.php">Salir</a></h1>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
