<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="taller-1.php" method="post">
        <label for="">Nota 1</label>
        <input type="number" name="nota1">
        <br>
        <label for="">Nota 2</label>
        <input type="number" name="nota2">
        <br>
        <label for="">Nota 3</label>
        <input type="number" name="nota3">
        <br>
        <input type="submit" value="send">

    </form>
</body>
</html>

<?php
  $nota1 = "{$_POST["nota1"]} <br>";
  $nota2 = "{$_POST["nota2"]} <br>";
  $nota3 = "{$_POST["nota3"]} <br>";
  $promedio = ($nota1 + $nota2 + $nota3) /3;

    if($promedio <= 39){
        $promedio = "estudie " ;
    }

    else{
        $promedio = "Becado"; 
    }

    echo $promedio;


?>