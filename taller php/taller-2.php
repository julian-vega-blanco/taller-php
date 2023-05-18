<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="taller-2.php" method="post">
    
        <label>User</label>
        <input type="number" name="user">
        <input type="submit" value="sent">
</form>


</body>
</html>


<?php
$pasa = "{$_POST["user"]}";


if ($pasa <= 10) {
    $resultado = "menor a 10 <br>";
    echo $resultado;
} else{
    $resultado = "mayor a 10 <br>";
    echo $resultado;
}
if ($pasa%2 == 0) {
    $resultados = "Par <br>";
    echo $resultados;
} else{
    $resultados = "Impar <br>";
    echo $resultados;
}

?>