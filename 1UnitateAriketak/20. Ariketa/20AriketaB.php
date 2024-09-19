<?php
$desio=array("Jamaica", "Vietnam", "Rusia", "Filipinas", "Senegal");
array_push($desio,"Andorra", "Japon");

$bisi_22=array("Jamaica","Vietnam");
$bisi_23=array("Rusia","Filipinas");

$bisi=array();
$bisi_22=array_diff($bisi_22, $bisi_23);
$bisi=array_merge($bisi_23, $bisi_22);
$desio=array_diff($desio, $bisi);

sort($desio);

print_r($desio);

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