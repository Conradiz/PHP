<?php 
    include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Select com Where</h2>
    <?php 
        $query_usuario = "SELECT id, nome, email, created, FROM usuarios WHERE nome LIKE 'c%'"; 
        $resultado_query = $conn->prepare($query_usuario);
        $resultado_query->execute();

        while ($linha_usuario = $resultado_query->fetch(PDO::FETCH_ASSOC)){
            extract($linha_usuario);
            echo"";
        }
    ?>
</body>
</html>