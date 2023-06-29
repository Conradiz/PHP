<?php 
   //forma mais segura de receber os dados
   //recebendo o nome do cliente 
   $nome_cliente = filter_input(INPUT_GET,"nome", FILTER_DEFAULT);
   //recebendo o email do cliente
   $email_cliente = filter_input(INPUT_GET,"email_cliente", FILTER_DEFAULT);
   
  
   $email_cliente = $_REQUEST['email_cliente'];

   $nome_cliente = $_REQUEST['nome'];
   echo " Nome do cliente $nome_cliente <br>";
   echo " $email_cliente<br><br>";
   //var_dump($email_cliente2);
?>