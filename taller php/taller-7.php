<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	
	<form method="POST" action="taller-7.php">

		<label for="nombre">Nombre del artículo:</label>
		<input type="text" name="nombre">
		
		<label for="precio">Precio del artículo:</label>
		<input type="number"name="precio">
		
		<label for="cantidad">Cantidad comprada:</label>
		<input type="number" name="cantidad">
		
		<input type="submit">
	</form>
</body>
</html>
<?php

	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	$cantidad = $_POST['cantidad'];
	$total = $precio * $cantidad;
	
	echo "<p>Nombre del artículo es {$nombre}</p><br>";
	echo "<p>Precio de la unidad es ${$precio}</p><br>";
	echo "<p>Cantidad comprada es ${$cantidad}</p><br>";
	echo "<p>Total a pagar es ${$total}</p><br>";
	?>