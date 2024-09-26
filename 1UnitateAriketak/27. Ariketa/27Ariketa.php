<?php
function taulaZ(){
    echo '<table style="border: 1px solid black">';
    $z=rand(0,10);

    for ($i= 0; $i<11; $i++) {
        echo '<tr style="border: 1px solid black">';
        echo'<td style="border: 1px solid black">'.$z."</td>";
        echo'<td style="border: 1px solid black">'.$i."</td>";
        echo'<td style="border: 1px solid black">'.$z*$i."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
function taulaIMG(){
    echo '<table style="border: 1px solid black"><tr><td>a</td><td>e</td></tr><tr><td>i</td><td>o</td></tr>';

    echo '</table>';
}
function a(){
$x=rand(0,5);
switch ($x) {
    case 1:
        echo"Ez du sarbiderik, berriro saiatzen<br>";
        a();
        break;
    case 2:
        taulaZ();
        break;
    case 3:
        taulaIMG();
        break;
    case 4:
    case 5:
        echo"non<br>";
    } 
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
    ?>
</body>
</html>