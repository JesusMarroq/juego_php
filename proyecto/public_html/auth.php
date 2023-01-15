<?php 
    session_start();
    if (isset($_SESSION['usuario_id'])) {
        imprimir_saludo();
    }else {
        if (isset($_POST['username']) && isset($_POST['password'])) {
        $usuario = array('id' => 5, 'username' => 'admin', 'password' => 'admin');
            if ($_POST['username'] === $usuario['username'] && $_POST['password'] === $usuario['password']) {
                $_SESSION['usuario_id'] = $usuario['id'];
                imprimir_saludo_admin();
            }else {
                imprimir_formulario('Datos incorrectos');
            }
        }else {
            imprimir_formulario();
        }
        
    }   

function imprimir_saludo_admin(){
    echo 'hola Admin';
    require_once '../application/views/logout_view.php';
    require_once 'preguntas.php';
}
function imprimir_formulario($error = ''){
    require_once '../application/views/login_form_view.php';
}
function imprimir_saludo(){
    echo 'hola Usuario';
    require_once '../application/views/logout_view.php';
  
}