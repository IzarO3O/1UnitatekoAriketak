<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
        $kolorea = $_POST["kolorea"];

    if(isset($_POST["kolorea"])){
        $kolorea = $_POST["kolorea"];
        echo "<body style='background-color:".$kolorea.";'>";
    }else{
        echo "non";
    }
?>
</body>
</html>