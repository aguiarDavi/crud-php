<?php

    include 'controller/carro_controller.php';  

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    switch($url) {
        case '/':
            include 'view/login.php';
            break;
        case '/home':
            include 'view/carro/pagina-principal.php';
            break;
        case '/carro':
            carro_controller::index();
            break;
        case '/carro/form':
            carro_controller::form();
            break;
        case '/carro/form/save':
            carro_controller::save();
            break;
        case '/carro/delete':
            carro_controller::delete();
            break;
        default:
            echo phpinfo();
    }
?>