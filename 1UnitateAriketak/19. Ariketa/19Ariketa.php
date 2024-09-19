<?php
$hiri=array("alemania", "brasil", "italia", "txile", "uruguay", "australia");
unset($hiri[0]);
unset($hiri[2]);
unset($hiri[5]);
$hiri=array_values(array: $hiri);

array_push($hiri,"argentina");
array_push($hiri,"bolivia");

sort($hiri);

print_r($hiri);
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