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
        $num = $_GET['num'];
        $erro = 0;

        if(empty($num) or $num < 0 or $num > 200){
            echo "<h1>Selecione um numero valido.</h1><br>";
            $erro = 1;
        }
        if($erro == 0){
            if($num <= 2 and $num > 0){
                echo "<h2>O numero é primo.</h2><br><a href='verificar.php/..'>Voltar</a>";
            }
            else if($num % 2 != 0){
                echo "<h2>O numero é primo.</h2><br><a href='verificar.php/..'>Voltar</a>";
            }
            else{
                echo "<h2>O numero não é primo.</h2><br><a href='verificar.php/..'>Voltar</a>";
            }
        }
    ?>
</body>
</html>