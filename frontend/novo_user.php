<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../backend/bootstrap/st1.css">
    <link rel="stylesheet" href="../backend/bootstrap/st2.java">
    <link rel="stylesheet" href="../backend/bootstrap/st3.java">
    <title>Cadastro</title>
</head>
<body>
    <div class="container container-fluid text-center">
        <form action="../backend/cadastro.php" method="post">
        <label for="Nome_completo"> Digite Seu Nome Completo</label> 
        <br>
        <input type="text" name="nome_user">
        <br>
        <label for="nick_user">Digite o nome pelo qual quer ser conhecido (nickname):</label>
        <br>
        <input type="text" name="nick_user">
        <br>
        <label for="senha">Digite uma senha:</label>
        <br>
        <input type="password" name="senha_user">
        <br>
        <Label>Digite um email:</Label>
        <br>
        <input type="email" name="email_user">
        <br>
        <input type="submit" name="new" value="criar cadastro">
        </form>
        <br>
        <a href="?login"> <button>voltar</button> </a>  
    </div>
</body>
    <?php 
        if(isset($_GET['login'])){
            header('Location: ../app/index.php');
        }
        if(isset($_POST['new'])){
            
        $test = array($_POST['nome_user'],$_POST['nick_user'],$_POST['senha_user'],$_POST['email_user']);
            
        }
    ?>
</html>