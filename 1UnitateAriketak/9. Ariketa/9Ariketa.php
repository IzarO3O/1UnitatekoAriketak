<?php
echo"<table>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
</tr>";

for ($i = 1; $i < 4; $i++) {
    echo "<tr>";
    echo "<th>".$i."</th>";

    for ($j = 1; $j < 5; $j++) {
        echo "<th>".$i."-".$j."</th>";
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