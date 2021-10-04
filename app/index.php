<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
   <?php 
        if(!isset($_SESSION['logado'])){
            include_once '../frontend/login.php';
        }else{
            echo"você ta dentro";
            echo "<br>";
            echo "<a href='?get_out'> Click para sair </a>";
    } 
    if(isset($_GET['get_out'])){
        session_destroy();
        header('Location: ../app/index.php');
    }
   ?>
</body>
</html>