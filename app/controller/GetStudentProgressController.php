<?php 
namespace app\controller;

use app\core\Controller;
use app\model\SessionModel;

class GetStudentProgressController extends Controller {

    private $sessionModel;

    public function __construct() {
        $this->sessionModel = new SessionModel();
    }

    public function GetProgress() {
        // Fazer a comunicação com o método de signIn através da modelo de $sessionModel, tratar as respostas assim como ocorre nas demais controladoras.

        $user = (object)[
            'email'     => $_SESSION['email'],
            'password'    => $_SESSION['extra']->password,
        ];

        $user = $this->sessionModel->signIn($user);
    
        if($user[0]->perfil === "student"){
            $_SESSION['progress'] = $user[0]->progress;
            $_SESSION['progressInPorcentage'] = $user[0]->progressInPorcentage;
            $_SESSION['actualModule'] = $user[0]->actualModule;
            $_SESSION['totalScore'] = $user[0]->totalScore;
        }

        //Redirection
        if($_SESSION['perfil'] === "student" || $_SESSION['perfil'] === "admin"){
            header("Location: " . BASE . "dashboard");
        }else if($_SESSION['perfil'] === "school" || $_SESSION['perfil'] === "admin"){
            header("Location: " . BASE . "dashboard-school");
        }else if($_SESSION['perfil'] === "teacher" || $_SESSION['perfil'] === "admin"){
            header("Location: " . BASE . "dashboard-teacher");
        }
    }
}