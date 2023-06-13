<?php
    class carro_model {
        public $id, $marca, $modelo, $ano;

        public $rows;

        public function save() {
            include 'carro_dao.php';
            $dao = new carro_dao();

            if(empty($this->id)) {
                $dao->create($this);
            } else {
                $dao->update($this);
            }
            
        }
        public function getAllRows() {
            include 'carro_dao.php';
            $dao = new carro_dao();
            $this->rows = $dao->read_all();
        }

        public function getById(int $id) {
            include 'carro_dao.php';
            $dao = new carro_dao();
            $obj = $dao->read($id); 
            return $obj ? $obj : new carro_model;
        }

        public function delete(int $id) {
            include 'carro_dao.php';
            $dao = new carro_dao();
            $dao->delete($id); 
        } 
    }
?>