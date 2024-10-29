<!DOCTYPE>
<html>
	<body>
		<h1>Calculadora de Nota Trimestral</h1>
		<form method="POST">
			<label for="nota-1-trimestre" name="nota-1-trimestre">Nota 1º Trimestre:</label>
			<input type="number" max=10 min=0 name="nota-1-trimestre"></input>
			<label for="nota-2-trimestre" name="nota-2-trimestre">Nota 2º Trimestre:</label>
			<input type="number" max=10 min=0 name="nota-2-trimestre"></input>
			<button type="submit" name="submit">Calcular</button>
			<br>
		</form>
	</body>
</html>
<?php
	$NotaTrimestre1 = $_POST["nota-1-trimestre"];
	$NotaTrimestre2 = $_POST["nota-2-trimestre"];
	$NotaTrimestre3 = (60 - ($NotaTrimestre1 * 3) - ($NotaTrimestre2 * 3)) / 4; 

	if ($NotaTrimestre3 < 10.0) {
		echo "Você precisa de " . $NotaTrimestre3 . " pontos para passar." . PHP_EOL;
	}
	if ($NotaTrimestre3 > 10.0) {
		echo "Você não pode mais passar :(." . PHP_EOL;
	}
?>
