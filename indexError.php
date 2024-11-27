<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    
    <!-- Incluye el CSS de Materialize original -->
    <link href="materialize.min.css" rel="stylesheet">

    <!-- Incluye tu CSS personalizado -->
    <link href="materialize.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1 class="center-align">Iniciar Sesión</h1>
        <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
            <div class="center-align">
                <p style="color: red; font-weight: bold;">Credenciales incorrectas. Por favor, inténtalo de nuevo.</p>
            </div>
        <?php endif; ?>

        <form method="POST" action="funciones/login.php" class="col s12 m6 offset-m3">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
