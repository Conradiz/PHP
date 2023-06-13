<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php
            //pegando o nome e sobrenome com o metodo GET
            $nome = $_GET["nome"];
            $sobrenome = $_GET ["sobrenome"];
            $sexo = $_GET ["sexo"];
            echo "<p> É um prazer te conhecer, $nome $sobrenome ! ";
            $result = 2 + 2 / 2;
            echo "<p> $result"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
    

</body>
</html>