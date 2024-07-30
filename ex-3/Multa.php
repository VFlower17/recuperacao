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
        $max = $_GET['max'];
        $vel = $_GET['vel'];

        $erro = 0;
        if(empty($max or $vel)){
            echo "<h2>Preencha todas as informações.</h2>";
            $erro = 1;
        }

        if($erro == 0){
            if($vel <= $max){
                echo "<h3>O motorista está dentro do limite de velocidade.</h3>";
            }
            else if($vel <= ($max * 1.1)){
                echo "<h3>O motorista pagará uma multa de R$50,00.</h3>";
            }
            else if($vel > ($max * 1.1) and $vel <= ($max * 1.2)){
                echo "<h3>O motorista pagará uma multa de R$100,00.</h3>";
            }
            else if ($vel > ($max * 1.2)){
                echo "<h3>O motorista pagará uma multa de R$200,00.</h3>";
            }
        }
    ?>
</body>
</html>