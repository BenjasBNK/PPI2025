<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2.php">
    <input type="color" name = "cor">
    <input type="number" name="A" >

    <input type="number" name="B" >
    
    <input type="submit">







    </form>
<?php
    $A= 0;
    $B= 0;
    /*Programa que imprime soma de dois numeros informados pelo ususrio via get*/
    if (isset($_GET["A"])){
        $A = $_GET["A"];
        
    }
    if (isset($_GET["A"])){
        $B = $_GET["B"];

    }
    echo "A soma de e b é =  ";
    echo $A."+".$B. "=". $A+$B;



    ?>
</html>