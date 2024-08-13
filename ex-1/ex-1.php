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
        $string = $_GET['texto'];
        $erro = 0;

        if(empty($string)){
            echo "<h3>Preencha o texto para contar os caracteres</h3>";
            $erro = 1;
        }
        if($erro == 0){
            echo "<h3>Tamanho da string: ".strlen($string)." caracteres.</h3><br>";
        }
    ?>
</body>
</html>