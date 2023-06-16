<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            $anonascimento = $_GET["anonas"];
            $ano = date("Y");
        ?>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anonas">Em que ano você nasceu?</label>
            <input type="number" name="anonas" id="anonas" value="<?=$anonascimento?>">
            <label for="">Quer saber sua idade em que ano</label>
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo "<p> </p> "
        ?>
    </section>
</body>
</html>