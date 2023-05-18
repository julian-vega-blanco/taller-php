<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
	<form method="POST" action="taller-8.php">
		<label for="lado">Lado del cuadrado</label>
		<input type="number" name="lado">
		<input type="submit">
	</form>
	
	<form method="POST" action="taller-8.php">
		<label for="base">Base del rectángulo</label>
		<input type="number" name="base">
		<label for="altura">Altura del rectángulo</label>
		<input type="number" name="altura">
		<input type="submit">
	</form>
</body>
</html>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["lado"])) {
            $perimetro = 4 * $_POST["lado"];
            echo "<p>Perímetro del cuadrado:  {$perimetro}</p>";
        } elseif (isset($_POST["base"], $_POST["altura"])) {
            $area = $_POST["base"] * $_POST["altura"];
            echo "Área del rectángulo: {$area}";
        }
    }
    
?>