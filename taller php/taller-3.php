<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="taller-3.php" method="post">

        <label for="">resistencia</label>
        <input type="number" name="resistencia">
        <br>
        <label for="">intensidad de corriente</label>
        <input type="number" name="intensidad">
        <br>
        
        <input type="submit" value="send">

</form>


</body>
</html>


<?php

$resistencia = "{$_POST["resistencia"]} <br>";
$intensidad = "{$_POST["intensidad"]} <br>";
$voltaje = $resistencia * $intensidad;


echo "tu voltaje es de $voltaje"

?>