<?php

class login_controller {


    private $dao;

    public function __construct() {
        include 'model/login_dao.php';
        $this->dao = new login_dao();
    }

    public function realizarLogin($username, $password) {
        if ($this->dao->validarLogin($username, $password)) {
            session_start();
            $_SESSION['loggedin'] = true;   
            header('Location: /home');
            exit();
        } else {
            header ('Location: /?error=1');
            exit();
        }
    }
}
?>
