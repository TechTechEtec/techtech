<?php 

namespace app\controller;

use app\core\Controller;

# Controller that manages our routes

class RouteController extends Controller {

    public function __construct() {}

    public function module1() {
        if(isset($_SESSION['loggedIn'])){
            $this->load("modules/01/main");
            
            return;
        }

        header('Locatoin: ' . BASE . 'signin');
    }

    public function dashboard() {
        
        if(isset($_SESSION['loggedIn'])){
            $this->load("dashboard/main");
            
            return;
        };

        header('Location: ' . BASE . 'signin');
    }

    public function home() {
        $this->load("home/main");
    }

    public function signin() {
        if(!isset($_SESSION['loggedIn'])){
            $this->load("signin/main");
            
            return;
        };

        header('Location: ' . BASE . 'dashboard');
       
    }

    public function chooseSignup() {
        $this->load("choose-signup/main");
    }

    public function signupSchool() {
        if(!isset($_SESSION['loggedIn']) || $_SESSION['perfil'] === 'admin'){
            $this->load("signup-school/main");
            return;
        }

        $this->showMessage(
            'Faça Logout para se inscrever', 
            'Você precisa se desconectar para realizar uma inscrição do tipo escola',
            BASE . "dashboard",
            200
        );
    }
       
    public function signupClass() {

        if(!isset($_SESSION['loggedIn']) || $_SESSION['perfil'] === 'admin'){

            $this->showMessage(
                'Você não tem permissão para acessar essa página', 
                'Você precisa estar autenticado como uma escola',
                BASE . "signin",
                404
            );

            return;
        }

        if((isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'school')  || $_SESSION['perfil'] === 'admin'){
            $this->load("signup-class/main");
            return;
        }   

        $this->showMessage(
            'Você não tem permissão para acessar essa página', 
            'você é um usuário do tipo ' . $_SESSION['perfil'],
            BASE . "dashboard",
            404
        );
        
    }
    
    public function signupStudent() {
    
        if(!isset($_SESSION['loggedIn'])  || $_SESSION['perfil'] === 'admin'){
            $this->load("signup-student/main");
            return;
        }

        $this->showMessage(
            'Faça Logout para se inscrever', 
            'Você precisa se desconectar para realizar uma inscrição do tipo estudante',
            BASE . "dashboard",
            200
        );
    }

    public function portfolio() {
        $this->load("portfolio/main");
    }

    public function feedback() {
        $this->load("feedback/main");
    }
    
    public function signupTeacher() {
       
        if(!isset($_SESSION['loggedIn'])  || $_SESSION['perfil'] === 'admin'){
            $this->load("signup-teacher/main");
            return;
        }

        $this->showMessage(
            'Faça Logout para se inscrever', 
            'Você precisa se desconectar para realizar uma inscrição do tipo professor',
            BASE . "dashboard",
            200
        );


    }

    public function teacherSchool() {

        if(!isset($_SESSION['loggedIn'])  || $_SESSION['perfil'] === 'admin'){

           $this->showMessage(
                'Você não tem permissão para acessar essa página', 
                'Você precisa estar autenticado como uma escola',
                BASE . "signin",
                404
            );

            return;
        }

        if(isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'school'){
            $this->load("teacher-school/main");
            return;
        }   

        $this->showMessage(
            'Você não tem permissão para acessar essa página', 
            'você é um usuário do tipo ' . $_SESSION['perfil'],
            BASE . "dashboard",
            404
        );
    }
}