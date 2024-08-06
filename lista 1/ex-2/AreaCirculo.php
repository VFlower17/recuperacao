<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $r = $_GET['raio'];
    $pi = 3.14;
    $erro = 0;

    if(empty($r)){
        echo "<h2>Informe o valor do raio.</h2>";
        $erro = 1;
    }
    $a = $pi * (pow($r, 2));
    if($erro == 0){
        echo "<h3>Area = " . number_format($a, 2, '.', '') ."</h3>";
    }
    ?>
</body>
</html>