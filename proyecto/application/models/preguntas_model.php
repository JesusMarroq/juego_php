<?php

require_once '../application/db/conexion.php';

function get_all_preguntas() {
	$sql = 'SELECT id, categoria_id, pregunta_nombre FROM preguntas';
	$result_array = get_elements($sql);
	return $result_array;
}

function get_all_preguntas_by_categoria_id($categoria_id) {
	$sql = 'SELECT id, pregunta_nombre FROM preguntas'
			. ' WHERE categoria_id = ' . $categoria_id;
//		echo $sql;
	$result_array = get_elements($sql);
	return $result_array;
}

function get_pregunta_by_id($pregunta_id){
    $sql = 'SELECT preguntas.id, preguntas.categoria_id, preguntas.pregunta_nombre, categorias.categoria_nombre'  
            . ' FROM preguntas'
            . ' INNER JOIN categorias ON categorias.id = preguntas.categoria_id'
            . ' WHERE preguntas.id = ' . $pregunta_id . ' LIMIT 1';
    $rowW_array = get_element($sql);
    return $rowW_array;

}

function pregunta_insert($data){
	$sql = "INSERT INTO preguntas"
			. " (categoria_id, pregunta_nombre)"
			. " VALUES ('" . $data['categoria_id'] . "', '" . $data['pregunta_nombre'] . "')";
	return insert_element($sql);
}


?>