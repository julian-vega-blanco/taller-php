<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="taller-9.php">
	<?php for ($n = 1; $n <= 10; $n++): ?>
		Atleta N° <?= $n ?><br>
		<label for="nombre<?= $n ?>">Nombre:</label>
		<input type="text" id="nombre<?= $n ?>" name="nombre[]"><br>
		<label for="marca<?= $n ?>">Marca (en metros):</label>
		<input type="number" id="marca<?= $n ?>" name="marca[]" step="0.01" min="0"><br><br>
	<?php endfor; ?>
	<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$atletas = [];
	foreach ($_POST['nombre'] as $i => $nombre) {
		$atletas[$i]['nombre'] = $nombre;
		$atletas[$i]['marca'] = $_POST['marca'][$i];
	}
	usort($atletas, function($a, $b) {
		return $b['marca'] - $a['marca'];
	});
	$campeona = $atletas[0]['nombre'];
	$marca_campeona = $atletas[0]['marca'];
	$record = $marca_campeona > 15.5;
	echo "Atleta campeona: $campeona<br>";
	echo "Marca de la atleta campeona: $marca_campeona metros<br>";
	if ($record) {
		echo "¡La atleta campeona rompió récord y ganó 500 millones de dólares!";
	} else {
		echo "La atleta campeona no rompió récord";
	}
}
?>
