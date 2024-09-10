<?php
$x=10;
$y=5;
function batuketa($x, $y){
    static $bat;
    $bat= $x+$y;
    return $bat;
}
function kenketa($x, $y){
    static $ken;
    $ken= $x-$y;
    return $ken;
}
function biderketa($x, $y){
    static $bid;
    $bid= $x*$y;
    return $bid;
}
function zatiketa($x, $y){
    static $zat;
    $zat= $x/$y;
    return $zat;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bat=batuketa($x, $y);
    $ken=kenketa($x,$y);
    $bid=biderketa($x,$y);
    $zat=zatiketa($x,$y);

    echo "BATUKETA: ".$x." + ".$y." = ".$bat."";
    echo "<br>KENKETA: ".$x." - ".$y." = ".$ken."";
    echo "<br>BIDERKETA: ".$x." * ".$y." = ".$bid."";
    echo "<br>ZATIKETA: ".$x." / ".$y." = ".$zat."";

    
    ?>
</body>
</html>