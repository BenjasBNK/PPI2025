<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 
 
    echo "Olá MUndao Perdido "."<br>";
    $nome = "Benjamim";

    echo gettype($nome)."<br>";

    echo $nome;

    $curso = $_GET["nome"];
    echo $curso;

    var_dump($_REQUEST);


    ?>
</body>
</html> 