<?php
echo"<table>";

for ($i = 1; $i < 5; $i++) {
    echo "<tr>";
    echo "<th>".$i."</th>";

    for ($j = 2; $j < 5; $j++) {
        echo "<th>".pow($i, $j)."</th>";
    }
    echo "</tr>";
}
echo "</table>";
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