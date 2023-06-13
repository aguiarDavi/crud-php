<?php
    class carro_controller {
        public static function index() {
            include 'model/carro_model.php';
            $model = new carro_model();
            $model->getAllRows();
            include 'view/carro/carro-lista.php';
        }
        public static function form() {
            include 'model/carro_model.php';
            $model = new carro_model();
            if(isset($_GET['id']))
            $model = $model->getById((int)$_GET['id']);
            //var_dump($model);
            include 'view/carro/carro-form.php';
        }
        public static function save() {
            include 'model/carro_model.php';
            $model = new carro_model();
            $model->id = $_POST['id'];
            $model->marca = $_POST['marca'];
            $model->modelo = $_POST['modelo'];
            $model->ano = $_POST['ano'];
            $model->save();

            header("Location: /carro");
        }

        public static function delete() {
            include 'model/carro_model.php';
            $model = new carro_model();
            $model->delete((int) $_GET['id']);
            header("Location: /carro");
        }
    }
?>