<?php
session_start();
$_SESSION["E1r"]=$_POST["Erantzun1"];
$_SESSION["E2r"]=$_POST["Erantzun2"];
$_SESSION["E3r"]=$_POST["Erantzun3"];
//pasar tambien las respuestas del usuario
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo"$_SESSION[maila]" ?>. maila - Emaitzak</h1>
    <?php if ($_SESSION["E1"] == True) {
        echo"<p style='background-color: green;'> Galdera 1 $_POST[Erantzun1]- Zuzena";
    }else{
        echo"<p style='background-color: red;'> Galdera 1 $_POST[Erantzun1]- Okerra";} ?></p>

    <?php if ($_SESSION["E2"] == True) {
        echo"<p style='background-color: green;'> Galdera 1 $_POST[Erantzun2]- Zuzena";
    }else{
        echo"<p style='background-color: red;'> Galdera 1 $_POST[Erantzun2]- Okerra";} ?></p>

    <?php if ($_SESSION["E3"] == True) {
        echo"<p style='background-color: green;'> Galdera 1 $_POST[Erantzun3]- Zuzena";
    }else{
        echo"<p style='background-color: red;'> Galdera 1 $_POST[Erantzun3]- Okerra";} ?></p>
</body>
</html>