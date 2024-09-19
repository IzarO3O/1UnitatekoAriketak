<?php
$array = array (1,2,3,4,5,6,7,8,9,10) ;
$z=0;
for ($i = 0; $i < count($array); $i++){
$z= $array[$i]+$z;
}
echo"<p> ".$z." </p>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>