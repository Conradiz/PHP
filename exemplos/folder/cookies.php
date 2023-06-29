<?php 
    setcookie("colaborador", "5323", (time() + (7 * 24 *3600)));
    
    $colaborador = $_COOKIE['colaborador'];
    echo "Numero do colaborador: $colaborador <br>";

    //chamando o cokkie diretamente 
    if (isset($_COOKIE['colaborador'])){
        echo "Numero do colaborador: ". $_COOKIE['colaborador'] . "<br>";
    }

    setcookie("logado","Conrado", (time() + (7 * 3600)));
    if (isset($_COOKIE['logado'])){
        echo "Usuario" . $_COOKIE['logado']. "<br>";
    }
    else{
        echo "Cokie invalido <br>";
    }
?>