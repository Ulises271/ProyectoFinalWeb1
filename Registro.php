<?php
require 'funciones/autenticar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <title>Registro</title>
    
</head>
<body>

    <header class="container" >
        <h3>Registrate en mi base de datos</h3>
    </header>
    
    <div class="container">
        <form action="./funciones/enviarU.php" method="post">
     
            <hr>
            <div class="input-field">
            
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" required maxlength="100" placeholder="Ingresa tu nombre de usuario">
                <br><br>
                <label for="nombre">Ingresa nombre:</label>
                <input type="text" name="nombre" required maxlength="100" placeholder="Ingresa tu nombre">
                <br><br>
                <label for="apellido_paterno">Ingresa apellido paterno:</label>
                <input type="text" name="apellido_paterno" required maxlength="100" placeholder="Ingresa tu apellido paterno">
                <br><br>
                <label for="apellido_materno">Ingresa apellido materno:</label>
                <input type="text" name="apellido_materno" required maxlength="100" placeholder="Ingresa tu apellido materno">
                <br><br>
                <label for="carrera">Ingrese su carrera:</label>
                <input type="text" name="carrera" required maxlength="100" placeholder="Ingresa tu carrera">
                <br><br>
                <label for="semestre">Ingrese su semestre:</label>
                <input type="int" name="semestre" required maxlength="100" placeholder="Ingrese su semestre">
                <br><br>
                <label for="no_cuenta">Ingrese su numero de cuenta:</label>
                <input type="int" name="no_cuenta" required maxlength="100" placeholder="Ingrese su numero de cuenta">
                <br><br>
                <label for="telefono">Telefono:</label>
                <input type="int" name="telefono" required maxlength="8" placeholder="Ingresa tu telefono">
                <br><br>
                <label for="email">Correo:</label>
                <input type="email" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                <br><br>
              
                <label for="contraseña">contraseña:</label>
                <input type="password" name="contraseña" required maxlength="8" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>
             <button type="submit" name="submit"  >Enviar registro</button>
        </form>
    </div>

    <div class="container">

    <a class="btn" href='./Registro.php'>Nuevo registro</a>
    <a class="btn" href='./inicio.php'>Ver registro</a>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

