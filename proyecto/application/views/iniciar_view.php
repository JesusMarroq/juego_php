<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Juego</title>
    </head>
    <body>
    <small style="float:midle"><a href="auth.php">Iniciar sesion como admin</a></small>

        <ul>
        <?php foreach ($usuarios_en_registro as $usuario ) { ?>
            <li>
                <?php echo $usuario; ?>
            </li>
        <?php } ?>
        </ul>
        
        <ul>
            <li>
                <form method="POST">
                    <input name="usuario_id">
                    <button>Iniciar</button>
                </form>
            </li>
        </ul>
            


    </body>
</html>