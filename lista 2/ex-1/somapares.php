<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Soma dos númeors pares < 100</h2>
    <?php
        $n = 0;
        $total = 0;
        for($i=1; $i < 100; $i++){
            if($n % 2 == 0){
                $total += $n;
            }
            $n = $n + 1;
        }

        echo "<br><h3>Resultado:</h3>";
        echo "<h4>$total</h4>";
    ?>
</body>
</html>