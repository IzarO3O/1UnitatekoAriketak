<?php
function media($x, $y){
    $z=($x+$y)/2;
    return $z;
};
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
    echo "".media(3,9);
    ?>
</body>
</html>