<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //funções são uteis para deixar o codigo dos programas mais modular e organizado. Elas também evitam que determinado código seja repetido quando for necessario executar a mesma tarefa

 /*   $codigo ="cursophp";
    contar($codigo);
    
    function contar($valor){
        echo "Acessou a função<br>";
        echo"Parametro: $valor <br>";
        if ($valor == "cursophp"){
            //echo "Codigo valido <br>";
            $msg = "Código válido";
        }
        else{
            //echo "Codigo invalido <br>";
            $msg = "Codigo invalido";
        }
        return $msg;
    }

    $codigo_curso = "cursophp";
    $retorna_funcao = contar($codigo_curso);
    echo $retorna_funcao. "<br>";
*/
    //enviar parametros na função como valor por referência
    echo "<h3>Passagem por valor</h3>";

    function salario($num){
        $num += 50;
        echo "dentro da função  - Salario com aumento: $num <br>";
    }

    $salario = 8200;
    salario($salario);
    echo "salario sem aumento: $salario <br>";
    echo "<hr>";

    function salario_a($num){
        $num += 150;
        echo "Dentro da função - Salario com aumento: $num <br>";
        return $num;
  //com o return é possivel salvar o valor da função em uma nova variavel e reutilizar      
    }
    $salario = 8500.57;
    $salario_aumento = salario_a($salario);
    echo "Salario sem aumento: $salario<br>";
    echo "Fora da função, imprimindo o retorno - Salário com aumento: $salario_aumento<br>";
    echo "<hr>";
//passagem por referencia utiliza-se o & antes do parametro
    echo"<h3>Passagem por referencia</h3>";
    function salario_b(&$num){
        $num += 250;
        echo "Dentro da função - Salario com aumento: $num <br>";
    }
    $salario_b = 7300;
    echo "Salário sem aumento: $salario_b <br>";
    salario_b(($salario_b));
    echo "Salario com aumento fora da função: $salario_b <br>";
?>
</body>
</html>