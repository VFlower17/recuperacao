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
        $texto = $_GET['texto'];
        $erro = 0;

        if(empty($texto)){
            echo "<h3>Preencha a caixa de texto.</h3>";
            $erro = 1;
        }
        if($erro == 0){
            $texto = strtolower($texto);

            function substituiVogais($string){
                $vogais = ['a','e','i','o','u','A','E','I','O','U'];
                return str_replace($vogais, 'x', $string);
            }
            echo "<h3>".substituiVogais($texto)."</h3>";
        }
    ?>
</body>
</html>