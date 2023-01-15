<?php

if (isset($_POST['pregunta_nombre'])) {
	if(isset($_POST['categoria_id']) && isset($_POST['pregunta_nombre'])){
		require_once '../application/models/preguntas_model.php';
		$data_insert = array(
			'pregunta_nombre' => $_POST['pregunta_nombre'],
			'categoria_id' => $_POST['categoria_id']
		);
		if(pregunta_insert($data_insert)) {
			header("Location: preguntas.php");
			die();
		} else {
			imprimir_pregunta_formulario('Error al insertar');
		}
	} else {
		imprimir_pregunta_formulario();
	}
} else {
	imprimir_pregunta_formulario();
}

function imprimir_pregunta_formulario($error = '') {
	require_once '../application/models/categorias_model.php';
	$categorias = get_all_categorias();
	require_once '../application/views/pregunta_form_view.php';
}