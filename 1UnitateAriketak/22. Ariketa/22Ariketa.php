<?php
$z=8;
function a($x){
    global $z;
    $sum=$z+$x;
    return $sum;
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
    echo a(1);
    ?>
</body>
</html>