<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="taller-4.php" method="post">    
      <label name="persona">persona</label>
<input type="number" name="persona">   
    <br>   
       <label name="persona2">persona 2</label>
<input type="number" name="persona2">    
    <br>   
       <label name="persona3">persona 3</label>
<input type="number" name="persona3">  
    <br>
<input type="submit" value="sent">
</form>



</body>
</html>


<?php

echo "User1: {$_POST["persona"]} <br>";
echo "User2: {$_POST["persona2"]} <br>";
echo "User3: {$_POST["persona3"]} <br>";

$gente = "{$_POST["persona"]}";
$gente2 = "{$_POST["persona2"]}";
$gente3 = "{$_POST["persona3"]}";

if ($gente > (($gente2 + $gente3) / 2)) {
    $resultado = "User1 Mayor";
    echo $resultado;
}
elseif ($gente2 > (($gente + $gente3) / 2)) {
    $resultado = "User2 Mayor";
    echo $resultado;
}
elseif ($gente3 > (($gente2 + $gente) / 2)) {
    $resultado = "User3 Mayor";
    echo $resultado;
}

?>