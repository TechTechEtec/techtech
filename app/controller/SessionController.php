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

        $this->validateCredentials($user);

        $user = $this->sessionModel->signIn($user);

        if (!is_array($user)) {
            $this->showMessage(
                'Erro ao fazer signIn', 
                $user,
                BASE
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


        // Storing Name Email and Perfil informations
        $_SESSION['name'] = $user[0]->name;
        $_SESSION['email'] = $user[0]->email;
        $_SESSION['perfil'] = $user[0]->perfil;
        $_SESSION['avatar'] = $user[0]->avatar;

        // Removing The name email and perfil from user[0] object
        // By doing that we can store the extra properties about this type of user
        // such as birthday between others
        unset($user[0]->name);
        unset($user[0]->email);
        unset($user[0]->perfil);
        unset($user[0]->avatar);

        $_SESSION['extra'] = $user[0];
        $_SESSION['loggedIn'] = true;

        header("Location: " . BASE . "dashboard");
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
    }

    public function logout() {
        // Fazer a comunicação com o método de logOut através da modelo de $sessionModel, tratar as respostas assim como ocorre nas demais controladoras.

        $this->sessionModel->logOut();

        header('Location: ' . BASE . 'signin');

        // Redirecionar para a tela de signIn após a Model ter executado com sucesso
    }

}