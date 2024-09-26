<?php
session_start();
$_SESSION["maila"]=$_POST["maila"];

if(isset($_POST["fname"])&&isset($_POST["lname"])&&($_POST["fname"])<>""&&($_POST["lname"])<>""){
    $izena=$_POST["fname"];
    $abizena=$_POST["lname"];
}else{
    echo"Eman izena";
}
$galdera=array("Zein da Frantziako hiriburua?", "Zer planeta dago Eguzkitik hurbilen?", "Zein elementu kimikoaren sinboloa da 'O'?", 
"Nork idatzi zuen 'Don Quijote'?", "Zein da munduko ibairik luzeena?", "Zenbat oin dituen armiarmak?", "Nola esaten da 'eskerrik asko' frantsesez?", 
"Ze kolorekoa da limoia?", "Zer metal erabiltzen da maiz elektrizitatea eroateko?", "Zein da munduko mendirik altuena?", "Zelan esaten da txakurra ingeleraz?", 
"Zein herrialdetako bandera du zuria eta gorria?");
$erantzun=array("Paris", "Merkurio", "Oxigeno", "Cervantes", "Nilo", "zortzi", "merci", "horia", "kobre", "Everest", "Dog", "Japonia");

if($_SESSION["maila"]==1){
$x=rand(0,5);
$galdera1=$galdera[$x];
$erantzuna1=$erantzun[$x];

do {
    $z = rand(0,5);
} while ($z == $x);
$galdera2=$galdera[$z];
$erantzuna2=$erantzun[$z];

do {
    $y=rand(0,5);
} while ($y==$x || $y==$z);
$galdera3=$galdera[$y];
$erantzuna3=$erantzun[$y];

}elseif($_SESSION["maila"]== 2){
    $x=rand(6,11);
    $galdera1=$galdera[$x];
    $erantzuna1=$erantzun[$x];

    do {
    $z = rand(6,11);
    } while ($z == $x);
    $galdera2=$galdera[$z];
    $erantzuna2=$erantzun[$z];

    do {
        $y=rand(6,11);
    } while ($y==$x || $y==$z);
    $galdera3=$galdera[$y];
    $erantzuna3=$erantzun[$y];

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
    <h1><?php echo"$_SESSION[maila]" ?>. mailako galderak</h1>
    <h2> <?php echo$izena." ".$abizena ?> </h2>
    <form action="emaitzak.php" method="POST">
        <label for="Erantzun1"><?php echo$galdera1 ?></label><br>
        <input type="text" id="Erantzun1" name="Erantzun1"><br>
        <label for="Erantzun2"><?php echo$galdera2 ?></label><br>
        <input type="text" id="Erantzun2" name="Erantzun2">      <br>  
        <label for="Erantzun3"><?php echo$galdera3 ?></label><br>
        <input type="text" id="Erantzun3" name="Erantzun3"><br>
        <input type="submit" value="Bidali">
    </form>
    <?php
    $_SESSION["E1r"]=$_POST["Erantzun1"];
    $_SESSION["E2r"]=$_POST["Erantzun2"];
    $_SESSION["E3r"]=$_POST["Erantzun3"];
    if($_POST["Erantzun1"]==$erantzuna1){
        $_SESSION["E1"]=True;
    }
    if($_POST["Erantzun2"]==$erantzuna2){
        $_SESSION["E1"]=True;
    }
    if($_POST["Erantzun3"]==$erantzuna3){
        $_SESSION["E1"]=True;
    }
    if($_POST["Erantzun1"]<>$erantzuna1){
        $_SESSION["E1"]=False;
    }
    if($_POST["Erantzun2"]<>$erantzuna2){
        $_SESSION["E1"]=False;
    }
    if($_POST["Erantzun3"]<>$erantzuna3){
        $_SESSION["E1"]=False;
    }
    ?>
</body>
</html>