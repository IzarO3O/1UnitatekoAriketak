<?php
$email="bla@gmail.com";
$posArroba=strpos($email,"@");
$a=substr($email, -4);
$posPun=strpos($email,".");
if ($posArroba!==false&&$posPun==1) {
    echo "$email helbide egokia da";
}else{
 echo "nono";
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