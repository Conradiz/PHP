<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Contar usuarios</h2>
    <?php 
        $consulta_usuarios = "SELECT id, nome, email, created FROM usuarios";
        $result_usuarios = $conn->prepare($consulta_usuarios);
        $result_usuarios-> execute();

            while ($linha_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
                
            }
    
    ?>
    
</body>
</html>