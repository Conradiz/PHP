<?php 
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Sessão</title>
    </head>
    <body>
        <?php 
            //Creiar a sessão

            $_SESSION['id'] = 2;
            $_SESSION['nome'] = "Conrado";

            //Veriricar s eexiste a sessão
            if(isset($_SESSION['id'])){
                echo "Id do usuario{$_SESSION['id']} e o nome é {$_SESSION['nome']} <br> ";
            }
            else{
                echo "Sessão não encontrada";
            }

            //excluir a sessão 
            unset($_SESSION['id'], $_SESSION['nome']);
            //Veriricar s eexiste a sessão
            if(isset($_SESSION['id'])){
                echo "Id do usuario{$_SESSION['id']} e o nome é {$_SESSION['nome']} <br> ";
            }
            else{
                echo "Sessão não encontrada";
            }
        ?>
    </body>
</html>