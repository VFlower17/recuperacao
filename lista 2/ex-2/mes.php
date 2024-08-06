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
        $num = $_GET['mes'];
        $erro = 0;
        if(empty($num) or $num == 0 or $num > 12 or $num < 0){
            echo "<h2>Selecione um número válido na faixa de 1 a 12.</h2><br>";
            $erro = 1;
            echo "<a href='mes.php/..'>Voltar</a>";
        }

        if($erro == 0){
            echo "<h2>Mês correspondente ao número escolhido:</h2><br>";
            switch($num){
                case 1:
                    echo "<h2>Janeiro</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 2:
                    echo "<h2>Fevereiro</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 3:
                    echo "<h2>Março</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 4:
                    echo "<h2>Abril</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 5:
                    echo "<h2>Maio</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 6:
                    echo "<h2>Junio</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 7:
                    echo "<h2>Julho</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 8:
                    echo "<h2>Agosto</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 9:
                    echo "<h2>Setembro</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 10:
                    echo "<h2>Outubro</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 11:
                    echo "<h2>Novembro</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
                case 12:
                    echo "<h2>Dezembro</h2><br><a href='index.php/..'>Voltar</a>";
                    break;
            }
        }
    ?>
</body>
</html>