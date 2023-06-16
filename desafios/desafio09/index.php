<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="desafio.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $valor1 = $_GET["primeirovalor"]?? ''; 
        $peso1 = $_GET["primeiropeso"]??'';
        $valor2 = $_GET["segundovalor"]?? '';
        $peso2 = $_GET["segundopeso"]?? '';
    ?>
    
    <main>
        <h1>Medias Aritimeticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valorp">1° Valor</label>
            <input type="number"name="primeirovalor" id="valP" value="<?=$valor1?>">
            <label for="pesop">1° Peso</label>
            <input type="number" name="primeiropeso" value="<?=$peso1?>">
            <label for="valors">2° valor</label>
            <input type="number" name="segundovalor" id="svalor">
            <label for="pesos">2° peso</label>
            <input type="number" name="segundopeso" id="speso" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $pesototal = $peso1 + $peso2;
            $valortotal = $valor1 + $valor2;
            $mediasim = $valortotal / 2 ;
            $mediapon = (($peso1*$valor1) + ($peso2*$valor2)) / $pesototal;
            echo "<p>Analisando os valores $valor1 e $valor2 :</p>";
            echo "<ul>
                    <li>A <strong>Média Aritmetica Simples</strong> entre os valores é igual a: ".$mediasim."</li>
                    <li>A <strong>Média Aritmética Ponderada</strong> com pesos".$peso1." e ".$peso2." é igual a: ".number_format($mediapon, 2, ",")."</li>
                </ul>";
        ?>

    </section>
</body>
</html>