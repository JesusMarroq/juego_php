<?php

require_once '../application/db/conexion.php';

function get_all_categorias() {
	$sql = "SELECT id, categoria_nombre FROM categorias";
	$result_array = get_elements($sql);
	return $result_array;
}

function get_categoria_by_id($categoria_id) {
	$sql = "SELECT id, categoria_nombre FROM categorias"
			. " WHERE id = " . $categoria_id;
	$row_array = get_element($sql);
	return $row_array;
}

function categoria_update($id, $data){
	$sql = "UPDATE `categorias` SET `categoria_nombre` = '" . $data['categoria_nombre'] . "'" 
			. " WHERE `categorias`.`id` = " . $id;
	return update_element($sql);
}

?>