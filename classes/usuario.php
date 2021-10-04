<?php 
    class user {
        public $nome_completo;
        public $nickname;
        public $senha;
        public $email;
        public $tipo;

       function __construct($nome_completo,$nickname,$senha,$email,$tipo){
            $this->nome_completo = $nome_completo;
            $this->nickname = $nickname;
            $this->senha = $senha;
            $this->email = $email;
            $this->tipo = $tipo;
        }
    }
    class usuario extends user {
        public $id;
        public $gostos; 

        function novo_usuario($conectado){

            $sql = "INSERT INTO usuarios (id, nome_completo, nickname, senha, email, tipo) 
            VALUES (NULL,'$this->nome_completo ','$this->nickname',
             '$this->senha','$this->email','$this->tipo')";

            $novo_usuario = mysqli_query($conectado,$sql);

            return $novo_usuario;
        }

        #Selecionar usuarios
        
        function verificar_user($conectado){

         $sql = "SELECT * FROM usuarios";

         $selct = mysqli_query($conectado,$sql);
        
         $lista_users = mysqli_fetch_array($selct);
          
         return $lista_users;

        }
    }    

?>