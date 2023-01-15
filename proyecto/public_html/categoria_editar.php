<?php 

if(isset($_GET['id'])){
	require_once '../application/models/categorias_model.php';
	//Validar no es vacio, sea entero, sea mayor a 0
	if (isset($_POST['enviar'])) {
		$update_data['categoria_nombre'] = $_POST['categoria_nombre'];
		if(categoria_update($_GET['id'], $update_data)){
			header("Location: preguntas.php");
			die();
		} else {
			imprime_categoria_formulario();
		}
	} else {
		imprime_categoria_formulario();
	}
} else {
	$error = 'Falta id';
	include_once '../application/views/error.php';
}

function imprime_categoria_formulario() {
	$categoria = get_categoria_by_id($_GET['id']);
	require_once '../application/views/categoria_form_view.php';
}