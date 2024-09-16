<?php
$nota= array("Ander"=>"3.5","Bego"=>"7","Jon"=>"6.3");
echo "<p> Anderren nota: ".$nota["Ander"]."</p>";
echo "<p> Begoren nota: ".$nota["Bego"]."</p>";
echo "<p> Jonen nota: ".$nota["Jon"]."</p>";
foreach ($nota as $k=>$v){
    echo "<p>Ikaslea: ".$k."--> Nota: ".$v."</p>";
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