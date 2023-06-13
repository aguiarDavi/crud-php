<?php

    class carro_dao {

        private $conexao;

        public function __construct() {
            
            $servidor = "localhost";
            $porta = 5432;
            $nome = "cadastro_carros";
            $usuario = "postgres";
            $senha = "postgres";

            $this->conexao = new PDO("pgsql:host=$servidor;port=$porta;dbname=$nome", $usuario, $senha);
        }
        
        public function create(carro_model $model) {
            $sql = "INSERT INTO carro (marca, modelo, ano) VALUES (?, ?, ?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->marca);
            $stmt->bindValue(2, $model->modelo);
            $stmt->bindValue(3, $model->ano);
            $stmt->execute(); 
        }
        public function update(carro_model $model) {
            $sql = "UPDATE carro SET marca=?, modelo=?, ano=? WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->marca);
            $stmt->bindValue(2, $model->modelo);
            $stmt->bindValue(3, $model->ano);
            $stmt->bindValue(4, $model->id);
            $stmt->execute(); 
        }

        public function read(int $id) {
            $sql = "SELECT * FROM carro WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetchObject('carro_model');
        }

        public function read_all() {
            $sql = "SELECT * FROM carro";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
        public function delete(int $id) {
            $sql = "DELETE FROM carro WHERE id=?";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }
?>