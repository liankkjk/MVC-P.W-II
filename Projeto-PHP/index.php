<?php

    $page = $_GET['pagina'] ?? null;

    switch($page){
        case 'pedidos':
            require 'src/Controllers/PedidosController.php';
            $controller = new PedidosController();
            break;

        case 'admin':
            require 'src/Controllers/AdminController.php';
            $controller = new AdminController();
            break;

        case 'usuario':
            require 'src/Controllers/UsersController.php';
            $controller = new UsersController();
            break;

        default:
            require 'src/Controllers/StaticController.php';
            $controller = new StaticController();
            break;
    }
    
    $controller->main();
?>