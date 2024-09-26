<?php
if(isset($_POST["fname"])&&isset($_POST["lname"])&&($_POST["fname"])<>""&&($_POST["lname"])<>""){
    $izena=$_POST["fname"];
    $abizena=$_POST["lname"];
    $adina=$_POST["age"];
    if(isset($_POST["age"])){
        if($adina=="15"){
         echo "<p>".$izena." blabla 15</p>";   
        }elseif($adina== "60"){
            echo"<p> blabla 60</p>";   
        }elseif($adina== "100"){
            echo"<p> blabla 100</p>";   
        }else{
            echo "Malchis";
        }
    }
}else{
    echo "Eman izena";
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