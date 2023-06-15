<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fomr.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <p>
            <?php 
                //pegando a data inicio (pegamos a data atual do sistema e subtraimos por 7)
                $inicio = date("m-d-Y", strtotime("-7 days"));
                //pegando a data atual do sistema como data final
                $final = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$final.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                //pegando o valor da cotacao de compra do dolar
                $dados = json_decode(file_get_contents($url), true);
                $cotacao = $dados["value"][0]["cotacaoCompra"];
                //pegando o valor do formulario
                $valor = $_GET["valor"];
                $dolar = $valor / $cotacao;
                //formatacao de moedas com internacionalização!
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seus: ". numfmt_format_currency($padrao, $valor, "BRL"). " equivalem a: " . numfmt_format_currency($padrao, $dolar, "USD");
                echo "<p>Cotação de hoje $cotacao</p>"
            ?>
        </p>
    </main>
    
</body>
</html>