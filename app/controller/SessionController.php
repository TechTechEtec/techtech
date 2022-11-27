<?php 
namespace app\controller;

use app\core\Controller;
use app\model\SessionModel;

use  app\classes\Input;

class SessionController extends Controller {

    private $sessionModel;

    public function __construct() {
        $this->sessionModel = new SessionModel();
    }

    public function signIn() {
        // Fazer a comunicação com o método de signIn através da modelo de $sessionModel, tratar as respostas assim como ocorre nas demais controladoras.

        $user = (object)[
            'email'     => Input::post('email'),
            'password'    => Input::post('password'),
        ];

        $user = $this->validateCredentials($user);

        $user = $this->sessionModel->signIn($user);

        if (!is_array($user)) {
            $this->showMessage(
                'Erro ao fazer signIn', 
                $user
            );

            die();
        }

        if(sizeof($user) === 0){
            $this->showMessage(
                'E-mail ou senha inválida', 
                "Verifique as credenciais e tente novamente",
            );

            die();
        }

        $this->setSession($user[0]);

        //Redirection
        if($_SESSION['perfil'] === "student" || $_SESSION['perfil'] === "admin"){
            header("Location: " . BASE . "dashboard");
        }else if($_SESSION['perfil'] === "school" || $_SESSION['perfil'] === "admin"){
            header("Location: " . BASE . "dashboard-school");
        }else if($_SESSION['perfil'] === "teacher" || $_SESSION['perfil'] === "admin"){
            header("Location: " . BASE . "dashboard-teacher");
        }
    }

    private function setSession(object $user) {
        // Storing Name Email and Perfil informations
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['perfil'] = $user->perfil;
        $_SESSION['avatar'] = $user->avatar;
        $_SESSION['bio'] = $user->bio;
        $_SESSION['classcode'] = $user->classcode;

        unset($user->name);
        unset($user->email);
        unset($user->perfil);
        unset($user->avatar);
        unset($user->bio);
        unset($user->classcode);

        $_SESSION['extra'] = $user;
        $_SESSION['loggedIn'] = true;
    }

    public function validateCredentials(object $user) {
        if (strlen($user->email) < 5) {

            $this->showMessage(
                'Formulário inválido', 
                'O e-mail tem menos do que 10 caractéres',
            );

            die();
        }

        if (strlen($user->password) < 8) {

            $this->showMessage(
                'Formulário inválido', 
                'A senha tem menos do que 8 caractéres',
            );

            die();
        }

        return  (object)[
            'email'     => strtolower($user->email),
            'password'    => hash('sha256', $user->password),
        ];
    }

    public function logout() {
        // Fazer a comunicação com o método de logOut através da modelo de $sessionModel, tratar as respostas assim como ocorre nas demais controladoras.

        $this->sessionModel->logOut();

        header('Location: ' . BASE . 'signin');

        // Redirecionar para a tela de signIn após a Model ter executado com sucesso
    }

}