<?php
$ikaslea = array("izena"=>["Ibai", "Andoni", "Iker"], "adina"=>["18", "19", "20"], "kalifikazioa"=>["7", "9", "8"]);
function ikasleaSortu($izena, $adina, $kalifikazioa){
    global $ikaslea;
    $ikaslea ["izena"][]= $izena;
    $ikaslea ["adina"][]= $adina;
    $ikaslea ["kalifikazioa"][]= $kalifikazioa;
}
function ikasleaErakutzi($izena){
    global $ikaslea;

    if(array_key_exists($izena, $ikaslea["izena"])){
        echo "aaaa";
    }else{
        echo "no";
    }
}
ikasleaSortu("Izaro", "19", "6");
print_r(value: $ikaslea);

ikasleaErakutzi("Izaro");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>