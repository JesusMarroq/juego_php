<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href= "css/default.css" rel="stylesheet" href="text/css">
    </head>
    <body>
    <small style="float:midle"><a href="iniciar.php">Regresar al juego</a></small>
        <?php if ($error !== '') { ?> 
        <div class="error">
            <?php echo $error; ?>
        </div>
        <?php } ?>
        <form method="POST">
            <div>
                <label for="username">Username</label>
                <input name="username">
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input name="password">
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </body>
</html>