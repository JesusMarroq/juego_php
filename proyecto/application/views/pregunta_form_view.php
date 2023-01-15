<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="POST">
			<div>
				<label for='categoria'>categoria</label>
				<select name="categoria_id">
					<?php foreach ($categorias as $categoria) { ?>
						<option value="<?php echo $categoria['id']; ?>">
							<?php echo $categoria['categoria_nombre']; ?>
						</option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label for='pregunta_nombre'>Nombre del pregunta</label>
				<input name="pregunta_nombre" />
			</div>
			<button name="enviar" type="submit">Guardar</button>
		</form>
	</body>
</html>