<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="desaf.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $segundos = $_GET["segun"]?? 0;
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segun" id="segun" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $resto = $segundos;
        //total de semanas
        $semana = intdiv($resto, 604_800);
        $resto = $resto % 604_800;
        //total de dias
        $dias = intdiv($resto, 84_400);
        $resto = $resto % 84_400;
        //total de horas
        $horas = intdiv($resto,3600);
        $resto= $segundos % 3600;
        //total de minutos
        $minuto = intdiv($resto, 60);
        $resto = $resto % 60;
        //tottal de segundos
        $segundo = $resto;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que voce digitou,<strong> <?=number_format($segundos,2,",",".")?> de segundos </strong>  a um total de:</p>
        <ul>
            <li><?=$semana?> Semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>