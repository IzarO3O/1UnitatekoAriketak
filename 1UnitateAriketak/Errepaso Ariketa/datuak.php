<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ikaslearen Datuak</h1>
    <form method="POST" action="datuak_jaso.php">
        <label for="fname">Izena:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Abizena:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="lname">Ikastaro maila:</label>
        <select id="maila" name="maila">
            <option value="1">Lehen maila</option>
            <option value="2">Bigarren maila</option>
        </select>
        <input type="submit" value="Bidali">
    </form>
</body>
</html>