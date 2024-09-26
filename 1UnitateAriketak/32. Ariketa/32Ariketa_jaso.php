<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$name = $_POST["name"];
$password = $_POST["password"];

if (empty($name) || empty($password)) {
    echo "Erabiltzailea eta pasahitza jarri behar dituzu!";
} else {
    echo "Kaixo $name! Ongi etorri!";
}
?>
</body>
</html>