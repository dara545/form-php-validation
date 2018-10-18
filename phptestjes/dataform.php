

<?php
// define variables and set to empty values

$errors= array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        array_push($errors, "naam is niet ingevuld");
    }
    else {
        $name = $_POST["name"];
    }

    if (empty($_POST["woonplaats"])) {
        array_push($errors, "woonplaats is niet ingevuld");
    }
    else {
        $address = $_POST["woonplaats"];
    }
    if (empty($_POST["vak"])) {
        array_push($errors, "vak is niet ingevuld");
    }
    else {
        $vak = $_POST["vak"];
    }
}

if (count($errors)==0){
 echo $_POST["name"]; 
 echo $_POST["woonplaats"];
 echo $_POST["vak"]; 
}
else{
    echo "gegevens zijn niet compleet!";
    foreach ($errors as $error) {
        echo $error;
 }

}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    





</body>
</html>