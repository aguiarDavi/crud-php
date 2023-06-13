<?php

    class login_dao {

        private $conexao;

        public function __construct() {
            
            $servidor = "localhost";
            $porta = 5432;
            $nome = "cadastro_carros";
            $usuario = "postgres";
            $senha = "postgres";

            $this->conexao = new PDO("pgsql:host=$servidor;port=$porta;dbname=$nome", $usuario, $senha);
        }
        public function validarLogin($username, $password) {
            $sql = "SELECT * FROM usuario WHERE username = :username";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch();
    
            if ($user && md5($password) === $user['password']) {
                return true; // Login bem-sucedido
            } else {
                return false; // Login inválido
            }
        }
    }

    ?>