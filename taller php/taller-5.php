<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="taller-5.php" method="post">
        <label for="">numero1</label>
        <input type="number" name="numero1">
        <br>
        <label for="">numero2</label>
        <input type="number" name="numero2">
        <br>
       
        <input type="submit" value="send">

    </form>
    
</body>
</html>

<?php
$numero1 = "{$_POST["numero1"]} <br>";
$numero2 = "{$_POST["numero2"]} <br>";



if($numero1 < $numero2){

    $resultado = ($numero1 + $numero2);
    $diferencia = ($numero2 - $numero1);

    echo "la suma de los dos numeros es $resultado <br> al numero 1 le falta $diferencia para ser igual de grande al 2";
}

else{
  $resultado = ($numero1 * $numero2);
  $division = ($numero1 / $numero2);

  echo "la multiplicacion entre los dos numerose es $resultado <br> la division entre los dos numeros es $division";
}



?>