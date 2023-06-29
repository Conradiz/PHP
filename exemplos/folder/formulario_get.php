<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastrar usuario</h2>
    <form action="processa_formularioget.php" method="GET">
        <label for="">Nome</label>
        <input type="text" placeholder="nome" name="nome" required><br><br>
        <label for="">Email</label>
        <input type="email" name="email_cliente" placeholder="email"><br><br>

        <input type="submit" value="Cadastrar">

    </form>
</body>
</html>