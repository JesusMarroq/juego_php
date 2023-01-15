<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php if($error !== '') { ?>
			<div class="error">
				<?php echo $error; ?>
			</div>
		<?php } ?>
		<form method="POST">
			<div>
				<h2>Agregando pregunta a : <?php echo $categoria['categoria_nombre']; ?></h2>
			</div>
			<div>
				<label for='pregunta_nombre'>Nombre del pregunta</label>
				<input name="pregunta_nombre" />
			</div>
			<button name="enviar" type="submit">Guardar</button>
		</form>
	</body>
</html>