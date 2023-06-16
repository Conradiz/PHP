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
        ?>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anonas">Em que ano você nasceu?</label>
            <input type="number" name="anonas" id="anonas" value="<?=$anonascimento?>">
        </form>
    </main>
</body>
</html>