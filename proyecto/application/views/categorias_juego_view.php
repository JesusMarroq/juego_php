<html>
	<head>
		<title>categorias</title>
	</head>
	<body>
		<?php foreach ($categorias as $categoria) { ?>
			<hr>
		
			<br>
			
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