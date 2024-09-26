<?php
if(isset($izena)&&isset($abizena)){
    echo"si";
}else {
    echo"No";
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
<h1>Ongi etorri</h1>
<h2><?php echo $izena." ".$abizena ?></h2>
</body>
</html>