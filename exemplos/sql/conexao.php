<?php 
    //criando a conexao com o banco de dados

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "conrado";
    $port = 3306;

    try{
        $conn = new PDO("mysql:host=$host;port=$port;dbname=" .$dbname, $user, $pass);
        //echo"Conexão ok";
    }
    catch(PDOException $err){
        echo"ERRO " .$err->getMessage();
    }   
?>