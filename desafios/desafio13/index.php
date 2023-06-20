<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="desaf.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php 
        $real = $_GET["rea"]?? 0;
    ?>
    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar?(R$)</label>
            <input type="number" name="rea" id="rea" value="<?=$real?>" step="5">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponiveis: R$100,R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $saqueSem = intdiv($real, 100);
        $resto = $real % 100;
        $saqueCin = intdiv($resto, 50);
        $resto = $resto % 50;
        $saqueDez = intdiv($resto, 10);
        $resto = $resto % 10;
        $saqueCinc = intdiv($resto, 5);
            ?>
    <section>
        <h2>Saque de R$<?=$real?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="reais100.jpg" alt="" class="nota">x<?=$saqueSem?></li>
            <li><img src="reais50.jpg" alt="" class="nota">x<?=$saqueCin?></li>
            <li><img src="reais10.jpg" alt="" class="nota">x<?=$saqueDez?></li>
            <li><img src="reais5.jpg" alt="" class="nota">x<?=$saqueCinc?></li>
        </ul>
    </section>
    
</body>
</html>