<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //O comando switch é utilizado quando é necessario comparar um variavel com diversos valores
        $a = 3;
        switch($a){
            case 1: 
                echo "Sacar dinheiro";
                break;
            case 2:
                echo "Guardar dinheiro";
                break;
            case 3: 
                echo"saldo";
                break;
            default:
                echo "Opção não encontrada";
                break;
        } 
    ?>
</body>
</html>