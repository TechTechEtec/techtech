<?php 


namespace app\controller;

use app\Core\Controller;
use app\Model\SessionModel;

class SessionController extends Controller {

    private $sessionModel;

    public function __contruct() {
        $this->sessionModel = new SessionModel();
    }

    public function signIn() {
        // Fazer a comunicação com o método de signIn através da modelo de $sessionModel, tratar as respostas assim como ocorre nas demais controladoras.

        // Redirecionar para a tela de dashboard após a Model ter executado com sucesso
    }

    public function logOut() {
        // Fazer a comunicação com o método de logOut através da modelo de $sessionModel, tratar as respostas assim como ocorre nas demais controladoras.

        // Redirecionar para a tela de signIn após a Model ter executado com sucesso
    }

}