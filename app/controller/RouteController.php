<?php 

namespace app\controller;

use app\core\Controller;

use app\model\StudentModel;
use app\model\SchoolModel;
use app\model\ClassModel;
use app\model\TeacherModel;

# Controller that manages our routes
class RouteController extends Controller {

    private $studentModel;
    private $schoolModel;
    private $classModel;
    private $teacherModel;

    public function __construct() {
        $this->studentModel = new StudentModel();
        $this->schoolModel = new SchoolModel();
        $this->classModel = new ClassModel();
        $this->teacherModel = new TeacherModel();

    }

    public function dashboard() {

        if(isset($_SESSION['loggedIn']) && ($_SESSION['perfil'] === 'student' || $_SESSION['perfil'] === 'admin')){

           $this->studentModel->fetchProgress($_SESSION['extra']->id);

            if($_SESSION['classcode']) {
                // CLASS ROOM
                $this->classModel->fetchByCode($_SESSION['classcode']);
                
                // SCHOOL
                $this->schoolModel->fetchById($_SESSION['classroom']->createdBy);
     
                // CLASSMATES
                $this->studentModel->fetchClassMates($_SESSION['classcode']);

                // TEACHER
                
                $this->teacherModel->fetchByEmail($_SESSION['classroom']->teacher_email);
            }else{
                unset($_SESSION['classroom']);
                unset($_SESSION['teacher']);
                unset($_SESSION['school']);
            }

            return $this->load("dashboard/main");
        };

        header('Location: ' . BASE . 'signin');
    }

    public function dashboardSchool() {
        
        if(isset($_SESSION['loggedIn']) && ($_SESSION['perfil'] === 'school' || $_SESSION['perfil'] === 'admin')){
            $this->load("dashboard-school/main");
            
            return;
        };

        header('Location: ' . BASE . 'signin');
    }
    
    public function dashboardTeacher() {
        
        if(isset($_SESSION['loggedIn']) && ($_SESSION['perfil'] === 'teacher' || $_SESSION['perfil'] === 'admin')){

            $this->classModel->fetchByTeacher($_SESSION['email']);

            $this->schoolModel->fetchByName($_SESSION['extra']->schoolName);

            $this->studentModel->fetchAll();
            
            $this->load("dashboard-teacher/main");
            
            return;
        };

        header('Location: ' . BASE . 'signin');
    }

    public function home() {

        if(isset($_SESSION['loggedIn'])){

            if($_SESSION['perfil'] === 'teacher' || $_SESSION['perfil'] === 'admin'){
                header('Location: ' . BASE . 'dashboard-teacher');
                return;
            }

            if($_SESSION['perfil'] === 'school' || $_SESSION['perfil'] === 'admin'){
                header('Location: ' . BASE . 'dashboard-school');
                return;
            }

            if($_SESSION['perfil'] === 'student' || $_SESSION['perfil'] === 'admin'){
                header('Location: ' . BASE . 'dashboard');
                return;
            }
        
        };

        $this->load("home/main");
    }

    public function signin() {
        if(!isset($_SESSION['loggedIn'])){
            $this->load("signin/main");
            
            return;
        };

        if($_SESSION['perfil'] === 'teacher' || $_SESSION['perfil'] === 'admin'){
            header('Location: ' . BASE . 'dashboard-teacher');
            return;
        }

        if($_SESSION['perfil'] === 'school' || $_SESSION['perfil'] === 'admin'){
            header('Location: ' . BASE . 'dashboard-school');
            return;
        }

        if($_SESSION['perfil'] === 'student' || $_SESSION['perfil'] === 'admin'){
            header('Location: ' . BASE . 'dashboard');
            return;
        }
       
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

        if((isset($_SESSION['perfil']) && ($_SESSION['perfil'] === 'school')  || $_SESSION['perfil'] === 'admin' || $_SESSION['perfil'] === 'teacher')){

            if($_SESSION['perfil'] === 'school'){
                $this->classModel->fetchBySchool($_SESSION['extra']->id);
                $this->teacherModel->fetchBySchool($_SESSION['name']);
            }else if($_SESSION['perfil'] === 'teacher'){
                $this->classModel->fetchByTeacher($_SESSION['email']);
            }else{
                $this->classModel->fetchBySchool($_SESSION['extra']->id);
                $this->teacherModel->fetchBySchool($_SESSION['name']);
            }

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
       
        if(!isset($_SESSION['loggedIn'])  || $_SESSION['perfil'] === 'admin')
        {
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

    public function signupTeacherByschool() {

        if(!isset($_SESSION['loggedIn'])){

           $this->showMessage(
                'Você não tem permissão para acessar essa página', 
                'Você precisa estar autenticado como uma escola',
                BASE . "signin",
                404
            );

            return;
        }

        if(($_SESSION['perfil'] === 'school' || $_SESSION['perfil'] === 'admin')){
            $this->load("signup-teacher-byschool/main");
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

        return $this->showMessage("Perfil inválido", "você não é um estudante para realizar a prova!", BASE . "signin", 400);
    }

    public function examModule1() {
        if(isset($_SESSION['loggedIn'])){
            $this->load("modules/01/exam");
            return;
        }

        return $this->showMessage("Perfil inválido", "você não é um estudante para realizar a prova!", BASE . "signin", 400);
        
    }

    // 02

    public function module2() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][0] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/02/main");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 01", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    public function examModule2() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][0] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/02/exam");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 01", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);

    }

    // 03

    public function module3() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][1] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/03/main");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 02", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    public function examModule3() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][1] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/03/exam");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 02", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    // 04

    public function module4() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][2] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/04/main");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 03", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    public function examModule4() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][2] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/04/exam");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 03", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    // 05

    public function module5() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][3] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/05/main");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 04", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    public function examModule5() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][3] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/05/exam");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 04", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    // 06

    public function module6() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][4] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/06/main");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 05", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    public function examModule6() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][4] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/06/exam");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 05", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    // 07

    public function module7() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][5] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/07/main");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 06", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    public function examModule7() {
        if(isset($_SESSION['loggedIn'])){
            if(
                (isset($_SESSION['modules']) && $_SESSION['modules'][5] !== null)
                || $_SESSION['perfil'] === 'admin' 
                || $_SESSION['perfil'] === 'teacher' 
                || $_SESSION['perfil'] === 'school'
            ){
                return $this->load("modules/07/exam");
            }

            return $this->showMessage("Acesso Negado", "você precisa concluir a prova do módulo 06", BASE . "dashboard", 400);
        }

        return $this->showMessage("Perfil inválido", "você precisa estar autenticado!", BASE . "signin", 400);
    }

    public function summary() {
        $this->load("summary/main");
    }

    public function playground() {
        $this->load("playground/main");
    }
}