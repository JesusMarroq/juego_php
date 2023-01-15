<?php
session_start();

if (isset($_SESSION['usuarios_en_registro'])) {
    $usuarios_en_registro = $_SESSION['usuarios_en_registro'];

} else {
    $_SESSION['usuarios_en_registro'] = [];
    $usuarios_en_registro = [];
}

    if (isset($_POST['usuario_id'])) {
        $usuario_id = $_POST['usuario_id'];
        $usuarios_en_registro[] = $usuario_id;
        $_SESSION['usuarios_en_registro'][] = $usuario_id;
        imprimir_juego();
    }
echo 'Bienvenido al juego';
require_once '../application/views/iniciar_view.php';

function imprimir_juego(){
   
    echo '*********************hola usuario ';
    require_once '../application/views/logout_juego_view.php';
    require_once 'preguntas_juego.php';
  
}


?>