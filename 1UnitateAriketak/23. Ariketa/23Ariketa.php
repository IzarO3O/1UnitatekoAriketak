<?php
function BEZ($x){
    $e=$x*1.21;
    return $e;
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
    echo BEZ(5);
    ?>
</body>
</html>