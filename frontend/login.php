<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container container-fluid text-center">
        <form action="../backend/login_user.php" method="post">
            <label for="nick">Digite seu Nick Name</label>
            <br>
            <input type="text" name="nick_entrar">
            <br>
            <label for="senha"> Digite sua Senha</label>
            <br>
            <input type="password" name="senha_entrar">
            <br>
            <input type="submit" name="entrar" value="entrar">
        </form>
    </div>
    Não é cadastrado ainda?<a href="../frontend/novo_user.php"> click aqui para se cadastrar</a>
</body>
</html>