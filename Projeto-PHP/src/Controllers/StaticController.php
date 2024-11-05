<?php

class StaticController {

    public function main(){

        //Página é um recurso do tipo GET

        $page = $_GET['pagina'] ?? null; //aqui ele verifica se $_GET['pagina'] existe e não é null, caso seja null ele retorna null

        switch($page){
            case 'entrar':
                $this->login();
                break;

            case 'registrar':
                $this->register();
                break;

            default:
                $this->home();
                break;
        }
    }

    public function home(){
        require 'src/Views/Static/Home.html';
    }

    public function login(){
        require 'src/Views/Static/Login.html';
    }

    public function register(){
        require 'src/Views/Static/Register.html';
    }


    public function admin(){
        require 'src/Views/Static/Admin/AdminView.php';
    }
}

?>