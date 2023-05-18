<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="taller-6.php" method="post">
    
    <label>Nombre1</label>
<input type="text" name="persona1">  

    <br>
      <label>Sexo1  M-F</label>
<input type="text" name="genero1">  
    <br>
      <label>Nota1</label>
<input type="number" name="nota1">  
    <br> 
      <label>Nombre2</label>
<input type="text" name="persona2">  
    <br>
      <label>Sexo2  M-F</label>
<input type="text" name="sexo2">  
    <br>
      <label>Nota2</label>
<input type="number" name="nota2">  
    <br>
      <label>Nombre3</label>
<input type="text" name="persona3">  
    <br>
      <label>Sexo3  M-F</label>
<input type="text" name="sexo3">  
    <br>
      <label>Nota3</label>
<input type="number" name="nota3">  
    <br>
<input type="submit" value="sent">
</form>

</body>
</html>

<?php
$persona1 = "{$_POST["persona1"]}";
$genero1 = "{$_POST["genero1"]}";
$nota1 = "{$_POST["nota1"]}";

$persona2 = "{$_POST["persona2"]}";
$sexo2 = "{$_POST["sexo2"]}";
$nota2 = "{$_POST["nota2"]}";

$persona3 = "{$_POST["persona3"]}";
$sexo3 = "{$_POST["sexo3"]}";
$nota3 = "{$_POST["nota3"]}";

if ($nota1 > $nota2) {
    $resultado = "$nota1 es la mejor nota";
    echo $resultado;
} else if($nota1 > $nota2){
    $resultado = "$nota2 es la mejor nota";
    echo $resultado;
} else if($nota1 > $nota2){
    $resultado = "$nota2 es la mejor nota";
    echo $resultado;
}
else if ($nota2 > $nota3) {
    $resultados = "$nota2 es la mejor nota";
    echo $resultados;
} else if($nota1 > $nota2){
    $resultados = "Inpar <br>";
    echo $resultados;
}  

?>