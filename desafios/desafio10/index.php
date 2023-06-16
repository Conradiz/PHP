<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="desaf.css">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            $anonascimento = $_GET["anonas"]?? 2000;
            $ano = date("Y");
            $anoatual = $_GET["anoatual"]
        ?>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anonas">Em que ano você nasceu?</label>
            <input type="number" name="anonas" id="anonas" value="<?=$anonascimento?>">
            <label for="">Quer saber sua idade em que ano? (atualmente estamos em <strong> <?=$ano?></strong>)</label>
            <input type="number" name="anoatual" value="<?=$anoatual?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
             $idade = $anoatual - $anonascimento;
             echo "<p>Quem nasceu em $anonascimento vai ter $idade anos em $ano <!DOCTYPE html> </p> "
        ?>
    </section>
</body>
</html>