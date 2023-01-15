<?php

require_once '../application/db/conexion.php';

function get_all_respuestas() {
	$sql = "SELECT id, respuesta_nombre FROM respuestas";
	$result_array = get_elements($sql);
	return $result_array;
}

function get_respuesta_by_id($respuesta_id) {
	$sql = "SELECT id, respuesta_nombre FROM respuestas"
			. " WHERE id = " . $respuesta_id;
	$row_array = get_element($sql);
	return $row_array;
}

function respuesta_update($id, $data){
	$sql = "UPDATE `respuestas` SET `respuesta_nombre` = '" . $data['respuesta_nombre'] . "'" 
			. " WHERE `respuestas`.`id` = " . $id;
	return update_element($sql);
}

?>