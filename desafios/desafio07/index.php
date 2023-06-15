<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $minimo = 1320.00;
        $salario = $_GET["sal"]?? 0;
    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="">Salario(R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>">
            <p>Considerando o salario minimo de R$<strong><?=$minimo?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
           
            $salarios = intdiv($salario, $minimo);
            $resto = $salario % $minimo;
        ?>
        <h1>Resultado final</h1>
        <p>Quem recebe um salario de R$<?=number_format($salario, 2, ",", ".")?> ganha <?=$salarios?> salarios minimos + R$<?=number_format($resto, 2, ",",".")?> </p>
    </section>
</body>
</html>