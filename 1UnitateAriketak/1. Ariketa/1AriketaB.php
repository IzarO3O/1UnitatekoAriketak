<?php

function froga ($x, $y){
    static $z;
    $e = $x+$y+$z;

    echo"<br>Aldagai globala barruko balioa".$z."<br>";
    $z = $e;
    return $e;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ariketa 1</title>
</head>
<body>
<?php
$x = 5;
$y = 2.5;
$z=1 ;
const a = "ancnaz";
print(a);
froga($x, $y);


$e=froga($x, $y);

echo "<p>x aldagaiaren balioa ".$x. " da</p>";
echo "<p>y aldagaiaren balioa ".$y. " da</p>";

echo "<p>x+y= ".$e."</p>";


?>
</body>
</html>
