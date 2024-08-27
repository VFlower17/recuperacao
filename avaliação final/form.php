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
        
        $texto = strtoupper($texto);
        echo $texto."<br>";        

        $tamanho = strlen($texto);
        $meio = $tamanho/2;
        $array_texto = str_split($texto);
        echo $array_texto[$meio]."<br>";

        $vogais = ['A', 'E', 'I', 'O', 'U'];
        $texto_subs = str_replace($vogais, 'X', $texto);
        echo $texto_subs."<br>";

        $arr_textosubs = str_split($texto_subs);
        $vogaissubs = 0;
        for($i = 0 ; $i < $tamanho ; $i++){
            if($arr_textosubs[$i] == 'X'){
                $vogaissubs += 1;
            }
        }
        echo $vogaissubs."<br>";

        $nova_frase = "dandelion field";
    ?>
</body>
</html>