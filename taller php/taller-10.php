<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</head>
<body>
	
<form method="POST" action="taller-10.php">
	<label for="numero">Ingrese un número:</label>
	<input type="number" id="numero" name="numero">
	<input type="submit" name="ejecutar" value="Agregar número">
	<input type="submit" name="ejecutar" value="Mostrar resultados">
	<input type="submit" name="ejecutar" value="Limpiar datos">
</form>
<?php
	session_start();

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		if (isset($_POST["ejecutar"])) {
			if ($_POST["ejecutar"] === "Agregar número") {
				$numero = $_POST["numero"];
				if ($numero !== "") {
					$_SESSION["numeros"][] = $numero;
				}
			} elseif ($_POST["ejecutar"] === "Mostrar resultados") {
				$numeros = $_SESSION["numeros"] ?? [];
				$suma = array_sum($numeros);
				$promedio = count($numeros) > 0 ? $suma / count($numeros) : 0;
				$mayor = max($numeros);
				$menor = min($numeros);
				$contador = count($numeros);

				echo "<h2>Resultados:</h2>";
				echo "<p>La sumatoria de los valores es: {$suma}</p>";
				echo "<p>El valor del promedio es: {$promedio}</p>";
				echo "<p>Se ingresaron {$contador} valores</p>";
				echo "<p>El mayor valor es: {$mayor}</p>";
				echo "<p>El menor valor es: {$menor}</p>";
			} elseif ($_POST["ejecutar"] === "Limpiar datos") {
				$_SESSION["numeros"] = [];
			}
		}
	}
?>