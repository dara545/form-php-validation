<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php    
echo "<p>";



$txt = "Leren Coderen";
echo  "ik wil $txt";

echo "</p>";


// verschil tussen global en local .

$x = 5;
$y = 8;


function mytest() {
// als je de eerste regel weg zou laten binnen de scope  zou je een foutmelding krijgen! en echo $y zou 8 opleveren.
    global  $x , $y;
    $y = $x + $y;

}

mytest();

echo $y;

echo "<br>";


print "Ik ben met PHP aan het oefenen <br> ";
Print " <h2> PHP is een uitdaging </h2>  " ;

//var_dump geeft je info over data type en waarden uit je array.
$autos = array ("VW", "BMW", "OPEL", "NISSAN" );
var_dump ($autos);

echo "<br>";
echo "<br>";

// een loop maken
$a = 20;
$b = 50;

if ($a>"25") {
    echo "mijn rekenvaardigheid kan beter";
}elseif ($a> $b ){
    echo "volg een cursus wiskunde";
}elseif ($a == $b){ 
    echo "je mag wel werken aan je rekenvaardigheid";
}else {
    echo "wiskunde is een prachtig vak";
}

echo "<br>";
echo "<br>";

// oefenen met functie 
function sum ($x, $y ){
    $z = $x + $y;
    return $z;

}

echo sum (5, 8) ;

echo "<br>";
echo "<br>";



?>



<form action="dataform.php" method="post">
Name: <input type="text" name="name"><br>
Email:<input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>