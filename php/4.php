<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Imprima todos os temos de uma P.A até N informado pelo usuario</h2>
    <label for="termon">Informe o indice do termo</label>
    <form action="">
    
    <input id="temon" type="text" name= "n">
    <input type="submit">
    


'   </form>
    <?php
    
    $r =isset($_GET["r"])?$_GET["r"]: 1;
    $n = isset($_GET["n"])?$_GET["n"]: 1;

    $i=1;
    $termon= isset($_GET["a1"])?$_GET["a1"]: 1;
    for($i=1;$i<=$n;$i++){

        echo "termo:".$termon. "<br>"; 
        $termon+=$r;
    
    }

    ?>

</body>
</html>