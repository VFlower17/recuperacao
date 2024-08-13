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
        $cep = $_GET['cep'];
        $tamanho = strlen($cep);
        $erro = 0;

        if(empty($cep)){
            echo "<h3>Preencha a caixa de texto.</h3>";
            $erro = 1;
        }
        if($tamanho > 8){
            echo "<h3>O cep deve ter 8 dígitos.</h3>";
            $erro = 2;
        }

        if($erro == 0){
            preg_match('/(\d{2})(\d{3})(\d{3})/', $cep, $matches);
        }
    ?>
</body>
</html>