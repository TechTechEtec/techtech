<?php 

namespace app\controller;

use app\core\Controller;

# Controller that manages our routes

class RouteController extends Controller {

    public function __construct() {}

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

    // MODULES

    // 01

    public function module1() {
        if(isset($_SESSION['loggedIn'])){

            $this->load("modules/01/main");
            
            return;
        }

        header('Location: ' . BASE . 'signin');
    }

    public function examModule1() {
        if(isset($_SESSION['loggedIn'])){

            if($_SESSION['perfil'] === 'student' || $_SESSION['perfil'] === 'admin'){
                $this->load("modules/01/exam");
                return;
            }

            $this->showMessage("Perfil inválido", "você não é um estudante para realizar a prova!", BASE . "dashboard", 400);
            return;
        }
        header('Location: ' . BASE . 'signin');
    }

    // 02

    public function module2() {
        if(isset($_SESSION['loggedIn'])){

            $this->load("modules/02/main");
            
            return;
        }

        header('Location: ' . BASE . 'signin');
    }

    public function examModule2() {
        if(isset($_SESSION['loggedIn'])){

            if($_SESSION['perfil'] === 'student' || $_SESSION['perfil'] === 'admin'){
                $this->load("modules/02/exam");
                return;
            }

            $this->showMessage("Perfil inválido", "você não é um estudante para realizar a prova!", BASE . "dashboard", 400);
            return;
        }
        header('Location: ' . BASE . 'signin');
    }

    // 03

    public function module3() {
        if(isset($_SESSION['loggedIn'])){

            $this->load("modules/03/main");
            
            return;
        }

        header('Location: ' . BASE . 'signin');
    }

    public function examModule3() {
        if(isset($_SESSION['loggedIn'])){

            if($_SESSION['perfil'] === 'student' || $_SESSION['perfil'] === 'admin'){
                $this->load("modules/03/exam");
                return;
            }

            $this->showMessage("Perfil inválido", "você não é um estudante para realizar a prova!", BASE . "dashboard", 400);
            return;
        }
        header('Location: ' . BASE . 'signin');
    }

    // 04

    public function module4() {
        if(isset($_SESSION['loggedIn'])){

            $this->load("modules/04/main");
            
            return;
        }

        header('Location: ' . BASE . 'signin');
    }

    public function examModule4() {
        if(isset($_SESSION['loggedIn'])){

            if($_SESSION['perfil'] === 'student' || $_SESSION['perfil'] === 'admin'){
                $this->load("modules/04/exam");
                return;
            }

            $this->showMessage("Perfil inválido", "você não é um estudante para realizar a prova!", BASE . "dashboard", 400);
            return;
        }
        header('Location: ' . BASE . 'signin');
    }

    // 05

    public function module5() {
        if(isset($_SESSION['loggedIn'])){

            $this->load("modules/05/main");
            
            return;
        }

        header('Location: ' . BASE . 'signin');
    }

    public function examModule5() {
        if(isset($_SESSION['loggedIn'])){

            if($_SESSION['perfil'] === 'student' || $_SESSION['perfil'] === 'admin'){
                $this->load("modules/05/exam");
                return;
            }

            $this->showMessage("Perfil inválido", "você não é um estudante para realizar a prova!", BASE . "dashboard", 400);
            return;
        }
        header('Location: ' . BASE . 'signin');
    }

    // 06

     public function module6() {
        if(isset($_SESSION['loggedIn'])){

            $this->load("modules/06/main");
            
            return;
        }

        header('Location: ' . BASE . 'signin');
    }

    public function examModule6() {
        if(isset($_SESSION['loggedIn'])){

            if($_SESSION['perfil'] === 'student' || $_SESSION['perfil'] === 'admin'){
                $this->load("modules/06/exam");
                return;
            }

            $this->showMessage("Perfil inválido", "você não é um estudante para realizar a prova!", BASE . "dashboard", 400);
            return;
        }
        header('Location: ' . BASE . 'signin');
    }

    // 07

    public function module7() {
        if(isset($_SESSION['loggedIn'])){

            $this->load("modules/07/main");
            
            return;
        }

        header('Location: ' . BASE . 'signin');
    }

    public function examModule7() {
        if(isset($_SESSION['loggedIn'])){

            if($_SESSION['perfil'] === 'student' || $_SESSION['perfil'] === 'admin'){
                $this->load("modules/07/exam");
                return;
            }

            $this->showMessage("Perfil inválido", "você não é um estudante para realizar a prova!", BASE . "dashboard", 400);
            return;
        }
        header('Location: ' . BASE . 'signin');
    }
}