<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="file" name="name" id="name">
    <input type="submit">
    </form>
    <?php
    
    // Irudiaren informazioa jaso
    $fitxategia = $_FILES['fitxategia'];
    $fitxategiarenIzena = $fitxategia['name'];
    $fitxategiarenTmpIzena = $fitxategia['tmp_name'];
    $fitxategiarenMota = $fitxategia['type'];
    $fitxategiarenTamaina= $fitxategia['size'];
    
    echo $fitxategia['name'];
    echo $fitxategia['tmp_name'];
    echo $fitxategia['type'];
    echo $fitxategia['size'];   
    
    // Irudia `img` karpeta sartuko dugu
    $irudiaIzena = "img/" . $fitxategiarenIzena; 
    if (move_uploaded_file($fitxategiarenTmpIzena, $irudiaIzena)) {
        echo "<p style='color:green'>Irudia ondo igo da.</p>";
    } else {
        echo "<p style='color:red'>Errorea gertatu da irudia igotzean.</p>";
    }
?>
</body>
</html>