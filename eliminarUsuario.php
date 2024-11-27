<?php
require 'funciones/autenticar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <title>Eliminar Usuario</title>
</head>
<body>
    <div class="container">
        <h1 class="center-align">Eliminar Usuario</h1>
        <form class="center-align" method="POST" action="./funciones/eliminarU.php" onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');">
            <div class="input-field">
                <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
                <label for="usuario">Ingresa el nombre de usuario a eliminar</label>
            </div>
            <button type="submit" class="btn waves-effect waves-light">Eliminar usuario</button>
        </form>
        <div class="center-align">
            <h1><a class="btn waves-effect waves-light" href="inicio.php">Regresar al inicio</a></h1>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
