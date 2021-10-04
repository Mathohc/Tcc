<?php 
    require_once '../frontend/novo_user.php';
    require_once '../classes/usuario.php';
    require_once '../classes/conexao.php';
    $info = $test;

    #informações do usuario
    $new_user= new usuario($info[0],$info[1],$info[2],$info[3],$fixo) ;

    #cadastro do usuario

    $novo_user = $new_user->novo_usuario($conectado);
    
    if(isset($novo_user)){
        header('Location: ../app/index.php');
    }



?>