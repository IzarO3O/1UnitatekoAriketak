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
    $index = array_search($izena, $ikaslea["izena"]);
    if($index==!false){
        echo "Izena: " . $ikaslea["izena"][$index] . "<br>";
        echo "Adina: " . $ikaslea["adina"][$index] . "<br>";
        echo "Kalifikazioa: " . $ikaslea["kalifikazioa"][$index] . "<br>";
    }else{
        echo "no";
    }
}

function batazBestekoa (){
    global $ikaslea;
    $batuketa= array_sum($ikaslea["kalifikazioa"]);
    $kopurua=count($ikaslea["kalifikazioa"]);
    $media=$batuketa/$kopurua;

    return $media;
}
ikasleaSortu("Izaro", "19", "6");
print_r(value: $ikaslea);

ikasleaErakutzi("Izaro");
ikasleaErakutzi("Izar");

echo "<br>".batazBestekoa();

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