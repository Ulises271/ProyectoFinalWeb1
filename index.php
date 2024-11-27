<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    
    <!-- Incluye el CSS de Materialize original -->
    <link href="materialize.min.css" rel="stylesheet">

    <!-- Incluye tu CSS personalizado -->
    <link href="materialize.css" rel="stylesheet">
</head>

<body>
    <?php
        if (isset($_GET['message']) && $_GET['message'] == 'sesion_cerrada') {
            echo "<div class='center-align' style='color: green; font-weight: bold;'>Sesión cerrada exitosamente.</div>";
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col s12 m5 offset-m3">
                <h1 class="center-align">Iniciar sesion</h1>
                <form method="POST" action="funciones/login.php">
                    <div class="input-field">
                        <input type="text" name="usuario" id="usuario" required>
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="contraseña" id="contraseña" required>
                        <label for="contraseña">Contraseña</label>
                    </div>
                        <button type="submit" class="btn waves-effect waves-light">Iniciar Sesión</button>
                </form>

            </div>
        </div>
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</body>

</html>
