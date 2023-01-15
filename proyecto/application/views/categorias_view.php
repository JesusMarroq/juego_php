<html>
	<head>
		<title>categorias</title>
	</head>
	<body>
		<a href="pregunta_agregar.php">agregar nueva</a>
		<?php foreach ($categorias as $categoria) { ?>
			<hr>
			<a style="float: right; margin-left: 10px;" href="categoria_editar.php?id=<?php echo $categoria['id']; ?>">
				editar categoria
			</a>
			<br>
			<a style="float: right;" href="pregunta_agregar_by_categoria.php?categoria_id=<?php echo $categoria['id']; ?>">
				agregar nueva pregunta
			</a>
			<h2>
				<?php echo $categoria['categoria_nombre']; ?>	
			</h2>
			<?php if(count($categoria['preguntas']) > 0) { ?>
				<ul>
					<?php foreach ($categoria['preguntas'] as $pregunta) { ?>
						<li>
							<a href="pregunta.php?pregunta_id=<?php echo $pregunta['id']; ?>">
								<?php echo $pregunta['pregunta_nombre']; ?>
							</a>
						</li>
					<?php } ?>
				</ul>
			<?php } else { ?>
				<div>sin preguntas<div>
			<?php } ?>
		<?php } ?>
	</body>
</html>