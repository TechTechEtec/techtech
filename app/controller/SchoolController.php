<?php

namespace app\controller;

use app\model\SchoolModel;
use app\core\Controller;

use  app\classes\Input;

class SchoolController extends Controller{
    private $schoolModel;

    public function __construct() {
        $this->schoolModel = new SchoolModel();
    }

    public function fetchAll() {

        $db_response = $this->schoolModel->fetchAll();

        console_log($db_response);
    }

    public function fetchById() {
        $id = Input::post('id');

        $db_response = $this->schoolModel->fetchById($id);

        console_log($db_response);
    }

    public function register(){
        $school = (object)[
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'password' => Input::post('password'),
        ];

        if (!$this->registerValidate($school)) {
            return  $this->showMessage(
                'Formulário inválido', 
                'Os dados fornecidos são inválidos',
                BASE  . '/',
                422
            );
        }

        $db_response = $this->schoolModel->register($school);

        if ($db_response <= 0) {
            echo 'Erro no Cadastro';
            die();
        }

        console_log($db_response);

    }

    public function update(){
        $school = (object)[
            "id"        => Input::post('id'),
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'password' => Input::post('password'),
        ];

        if (!$this->updateValidate($school)) {
            return  $this->showMessage(
                'Formulário inválido', 
                'Os dados fornecidos são inválidos',
                BASE  . '/',
                422
            );
        }

        $db_response = $this->schoolModel->update($school);

        if ($db_response <= 0) {
            echo 'Erro no Cadastro';
            die();
        }

        console_log($db_response);

    }

    private function registerValidate(Object $school){
  
        if (strlen($school->name) < 3)
            return false;

        if (strlen($school->email) < 10)
            return false;

        if (strlen($school->password) < 8)
            return false;

        return true;
    }

    private function updateValidate(Object $school){
  
        if(property_exists($school, "name"))
            if (strlen($school->name) < 3)
                return false;

        if(property_exists($school, "email"))
            if (strlen($school->email) < 10)
                return false;

        if(property_exists($school, "password"))
            if (strlen($school->password) < 8)
                return false;

        return true;
    }
}