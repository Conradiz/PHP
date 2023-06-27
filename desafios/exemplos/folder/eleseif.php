<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<h1>Trabalhando com comparação</h1>";
        $a = 10;
        $b = 10;
        $c = 5;

        if ($a == $b){
            echo "A é igual a B<br>";
        }
        elseif($a != $b){
            echo "A é diferente de B<br>";
        }
        else{
            echo "Erro";
        }

        if ($a > $b && $b > $c ){
            echo "A é maior que B e B é maior que C";
        }
        elseif ($a = $b || $c < $b){
            echo"mudadndo";
        }

    ?>
</body>
</html>