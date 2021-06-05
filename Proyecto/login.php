<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesión</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <style type="text/css">

    </style>
</head>
<body>
    <form action="vision.php" method="POST" id="form">
        <div class="form">
            <h1>Inicia sesión</h1>
            <div class="grupo">
                <input type="email" name="email" id="email" require><span class="barra"></span>
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="password" name="password" id="password" require><span class="barra"></span>
                <label for="">Password</label>
            </div>
            
            <button type="submit">Iniciar</button>
         <p>Al registrarte, aceptas nuestras Condiciones
          de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta?<a class="link" href="Registro.php">Registrarse</a></p>
        </div>
    </form>
</body>
</html>