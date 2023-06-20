<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos</label>
            <input type="number" name="segun" id="segun" value="">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que voce digitou, [?] segundos  a um total de:</p>
        <ul>
            <li>0 semanas</li>
            <li>0 dias</li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </section>
</body>
</html>