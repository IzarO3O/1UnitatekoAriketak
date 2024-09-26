<?php
include("header.inc");

$hha=array(1=>"Harri", 2=>"Horri", 3=>"Ar");
$i=0;
$g=0;
function galduirabazi(){
    global $i;
    global $g;
    if($i>2){
        echo"Irabazi ofizial";
        return;
    }elseif($g> 2){
        echo "Galdu ofizial";
        return;
    }
}
function hha($a){
    global $i;
    global $g;
    $X = rand(1, 3);  
    galduirabazi();
        if($X===1){
        switch($a){
            case 1:
                echo "Empate, harri harri<br>";
                break;
            case 2:
                echo "Irabazi, harri horri<br>";
                $i++;
                galduirabazi();
                break;
            case 3:
                echo "Galdu, harri ar<br>";
                $g++;
                galduirabazi();
                break;
        }
    } elseif($X===2){
        switch($a){
            case 1:
                echo"Galdu, horri harri<br>";
                $g++;
                galduirabazi();

                break;
            case 2:
                echo "Empate, horri horri<br>";
                break;

            case 3:
                echo "Irabazi, horri ar<br>";
                $i++;
                galduirabazi();
                break;
        }
    } elseif($X===3){
        switch($a){
            case 1:
                echo"Irabazi, ar harri<br>";
                $i++;
                galduirabazi();
                break;
            case 2:
                echo "Galdu, ar horri<br>";
                $g++;
                galduirabazi();
                break;
            case 3:
                echo "Empate, ar ar<br>";
                break;
        }
    }
}

hha(1);
hha(2);
hha(3);
hha(1);
hha(2);

include("footer.inc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
