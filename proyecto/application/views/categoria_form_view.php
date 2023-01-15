<html>
	<head>
		<title>categoria formulario</title>
	</head>
	<body>
		<form method="POST">
			<div>
				<label>categoria</label>
				<input name="categoria_nombre" value="<?php echo $categoria['categoria_nombre']; ?>">
			</div>
			<button type="submit" name="enviar">Enviar</button>
		</form>
	</body>
</html>