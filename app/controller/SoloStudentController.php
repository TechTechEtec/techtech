<?php

namespace app\controller;

use app\model\SoloStudentModel;
use app\core\Controller;

use  app\classes\Input;

class SoloStudentController extends Controller {
    private $soloStudentModel;

    public function __construct(){ 
        $this->soloStudentModel = new SoloStudentModel();

    }

    public function fetch() {

        $db_response = $this->soloStudentModel->fetch();

        console_log($db_response);
    }

    public function insert(){
        $student = $this->getInput();

        if (!$this->validate($student)) {
            return  $this->showMessage(
                'Formulário inválido', 
                'Os dados fornecidos são inválidos',
                BASE  . 'novo-produto/',
                422
            );
        }

        $result = $this->soloStudentModel->insert($student);

        if ($result <= 0) {
            echo 'Erro no Cadastro';
            die();
        }

        console_log($result);

        // redirect(BASE . '/' . $result);
    }

    private function getInput(){
        return (object)[
            'nome_aluno'      => Input::post('nome_aluno'),
            'email_aluno'    => Input::post('email_aluno'),
            'data_nascimento_aluno' => Input::post('data_aluno'),
            'senha_aluno' => Input::post('senha_aluno')
        ];
    }

    private function validate(Object $student){
  
        if (strlen($student->nome) < 3)
            return false;

        if (strlen($student->email_aluno) < 10)
            return false;

        if (strlen($student->senha) < 8)
            return false;

        return true;
    }
}