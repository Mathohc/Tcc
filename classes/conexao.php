<?php 
    class conexao {
        public $host;
        public $password;
        public $us;
        public $bcd;

        function conectar(){
            $this->host = "localhost";
            $this->us = "root";
            $this->password = "";
            $this->bcd= "site";

            $conn = mysqli_connect($this->host,$this->us,$this->password,$this->bcd);
            return $conn;
        }
        
    }
    $conexao = new conexao;
    $conectado = $conexao->conectar();


   
?>