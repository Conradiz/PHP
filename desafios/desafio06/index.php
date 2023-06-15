<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fomr.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $dividendo = $_GET["divid"] ??0;
        $divisor = $GET["divis"];
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">
            <label for="">Dividendo</label>
            <input type="number" name="divis" id="divis" value="<?=$dividendo?>">
            <label for="divisor">divisor</label>
            <input type="number" name="divis" id="divis" min="0" value="<?=$divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>   
    <section>
        <h2>Estrutura da divisão</h2>
        <?php
            //calculos
            $quociente = intdiv( $dividendo, $divisor);
            $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo ?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section> 
</body>
</html>