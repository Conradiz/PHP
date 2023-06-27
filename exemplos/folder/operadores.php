<?php 
/*
    //$idade = 22;
    //$nome = "Conrado Vinha";
    //echo "O aluno $nome tem " .$idade." anos  <br>" ; 
    //conversao de variaveis
    $result = "2";
    $result += 1;
    var_dump($result);
    $result = (double) $result;
    echo "Tipo de dado";
    var_dump($result);
    //covertendo a variavel de forma explicita
    $result_dois = (int)$result;
 */
//AULA OPERADORES 

$a = 2;
$b = 4;
$result_soma = $a + $b;
echo "A soma entre $a e $b é igual á: $result_soma<br><br>";

$result_multi = $a * $b;
echo "A multiplicação entre $a e $b é igual á: $result_multi <br><br>";
$salario = 15890.750;
//convertendo para rela para apresentar na tela
echo "Salario: R$ ".number_format($salario, 2,",",".")."<br>";
//atrihuição de concatenação
$d = "Bom ";
$d .= "Dia, ";
$d .="Conrado";
echo "$d";
?>