<?php
$ikasle = array('Jone'=>array('Abizenak'=>'Martinez Lopez','Adina'=>'20', 'Zikloa'=>'AS3'),
 'Ander'=>array('Abizenak'=>'Urrutia Ron','Adina'=>'19', 'Zikloa'=>'DW3'),
 'Mikel'=>array('Abizenak'=>'Olarreta Andion','Adina'=>'20', 'Zikloa'=>'DW3'));
/*foreach($ikasle as $k=>$v){
    foreach($v as $k2=>$v2){
        echo "<p>Izena: ".$k."<br>- Abizenak: ".$k2['Abizenak']."<br>- Adina: ".$k2['Adina']."</p>";
    }
}*/
foreach ($ikasle as $izena => $datuak) {
    // Correctly access values from the inner array
    echo "<p>Izena: " . $izena . "<br>- Abizenak: " . $datuak['Abizenak'] . "<br>- Adina: " . $datuak['Adina'] . "<br>- Zikloa: " . $datuak['Zikloa'] . "</p>";
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