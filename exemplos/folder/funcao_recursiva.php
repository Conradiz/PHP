<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Funções recursivas são aquelas que chamam a si mesma.
        echo "<h3>Funções Recursivas</h3>";
        function exibe($num){
            if($num >= 1){
                echo "Valor passado para a função: $num <br>";
                $quantidade = $num - 1;
                exibe($quantidade);
            }
            
        }

        exibe(10);

    ?>
</body>
</html>