<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="desafio.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $preco = $_GET["prec"];
        $porcentagem = $_GET["por"];
    ?>
    <main>
        <h1>Reajustadoer de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="">Preço do Produto (R$)</label>
            <input type="number" name="prec" id="prec" value="">
            <label for="por">Qual será p percentual de reajuste? (<strong><span id="pos">?</span>%</strong>)</label>
            <input type="range" name="por" id="por" min="0" max="100">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 

    ?>
    <section>
        <h2>Resultado do reajuste</h2>
        <p>O produto que custava R$ com % de aumento vai passar a custar R$ a partir de agora</p>
    </section>
    <script>
        function mudaPor(){
            pos.innerText = por.value;
        }
    </script>
</body>
</html>