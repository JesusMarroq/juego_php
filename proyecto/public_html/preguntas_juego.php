<?php

require_once '../application/models/categorias_model.php';
require_once '../application/models/preguntas_model.php';

$categorias = get_all_categorias();
foreach ($categorias as &$categoria) {
	$categoria['preguntas'] = get_all_preguntas_by_categoria_id($categoria['id']);
	unset($categoria);
}
require_once '../application/views/categorias_juego_view.php';
?>