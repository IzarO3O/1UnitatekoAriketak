<?php
function a(){
    static $a;
    $a++;
    return $a;
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
    a();
    a();
    a();
    echo "".a();
    ?>
</body>
</html>