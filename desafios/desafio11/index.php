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
        $preco = $_GET["pre"]?? 0;
        $porcentagem = $_GET["rea"]?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="">Preço do produto (R$)</label>
            <input type="number" name="pre" id="pre" value="<?=$preco?>" step="0.01">
            <label for="reaj">Qual será o percentual do reajuste(<strong><span id="por">?</span>%</strong>)</label>
            <input type="range" name="rea" id="rea" min="0" max="100" value="<?=$porcentagem?>" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
    <?php 
            $reajuste = $preco * $porcentagem / 100;
            $final = $reajuste + $preco;
        ?>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?= number_format($preco,2, ",",".")?> com <?=$porcentagem?>% de aumento vai passar a custar R$<?=$final?>a partir de agora</p>
    </section>
    <script>
        //Declaraçoes automaticas
        mudaValor()

        function mudaValor(){
            por.innerText = rea.value;
        }
    </script>
</body>
</html>