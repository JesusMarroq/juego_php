<?php

if(isset($_GET['pregunta_id'])){
	require_once '../application/models/preguntas_model.php';
	$pregunta_id = $_GET['pregunta_id'];
	$pregunta = get_pregunta_by_id($pregunta_id);
    require_once '../application/views/preguntas_view.php';
//	print_r($pregunta);
} else {
	echo 'error';
}
?>