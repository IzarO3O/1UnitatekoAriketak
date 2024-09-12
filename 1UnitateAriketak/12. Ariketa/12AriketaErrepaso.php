<?php
$z=1;
echo"5 saiakera dituzu zenbakia zein den asmatzeko<br><br>";
$x=rand(0,10);

for ($a= 0; $a< 5; $a++) {
    $x=rand(0,10);
    echo "Aukeratutako zenbakia ".$x." da.<br>";
    if($z==$x){
break;
}else {
    echo"Saiakera okerra, berriro saiatzen...<br>";

}
}
if ($z==$x){
    echo "Zuzena asmatu duzu!";
} else {
    echo "Ez duzu lortu";
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
    
</body>
</html>