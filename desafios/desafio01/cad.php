<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $numero = $_GET["numero"];
                $sucessor = $numero + 1;
                $antecessor = $numero - 1;
                echo " Numero escolhido: <strong> $numero </strong>";
                echo "<br> O antecessor é $antecessor ";
                echo "<br> O sucessor é $sucessor";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>