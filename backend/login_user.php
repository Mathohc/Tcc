<?php 
    session_start();
    require_once '../classes/usuario.php';
    require_once '../classes/conexao.php';

    $user = new usuario (0,0,0,0,0);

    $user_v = $user->verificar_user($conectado);
     
    $info_v = array($_POST['nick_entrar'],$_POST['senha_entrar']);

    if($info_v[0] == $user_v[2] && $info_v[1] == $user_v[3]){
        $_SESSION['logado'] = true; 
        header('Location:../app/index.php');
    }

    if($info_v[0] != $user_v[2]){
        echo"Seu nome de usuario esta incorreto!";
        echo"<br>";
    }

    if($info_v[1] != $user_v[3]){
        echo" Senha incorreta  !";
    }
    echo "<a href='../app/index.php'> Voltar para a página de login</a>"; 
?>