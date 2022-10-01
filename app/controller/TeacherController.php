<?php

namespace app\controller;

use app\model\TeacherModel;
use app\core\Controller;

use  app\classes\Input;

class TeacherController extends Controller{
    private $teacherModel;

    public function __construct() {
        $this->teacherModel = new TeacherModel();
    }

    public function fetchAll() {

        $db_response = $this->teacherModel->fetchAll();

        console_log($db_response);
    }

    public function fetchById() {
        $id = Input::post('id');

        $db_response = $this->teacherModel->fetchById($id);

        console_log($db_response);
    }

    public function register(){
        $teacher = (object)[
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'password' => Input::post('password'),
        ];

        if (!$this->registerValidate($teacher)) {
            return  $this->showMessage(
                'Formulário inválido', 
                'Os dados fornecidos são inválidos',
                BASE,
                422
            );
        }

        $db_response = $this->teacherModel->register($teacher);

        if ($db_response <= 0) {
            echo 'Erro no Cadastro';
            die();
        }

        console_log($db_response);

    }

    public function update(){
        $teacher = (object)[
            "id"        => Input::post('id'),
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'password' => Input::post('password'),
        ];

        if (!$this->updateValidate($teacher)) {
            return  $this->showMessage(
                'Formulário inválido', 
                'Os dados fornecidos são inválidos',
                BASE,
                422
            );
        }

        $db_response = $this->teacherModel->update($teacher);

        if ($db_response <= 0) {
            echo 'Erro no Cadastro';
            die();
        }

        console_log($db_response);

    }

    private function registerValidate(Object $teacher){
  
        if (strlen($teacher->name) < 3)
            return false;

        if (strlen($teacher->email) < 10)
            return false;

        if (strlen($teacher->password) < 8)
            return false;

        return true;
    }

    private function updateValidate(Object $teacher){
  
        if(property_exists($teacher, "name"))
            if (strlen($teacher->name) < 3)
                return false;

        if(property_exists($teacher, "email"))
            if (strlen($teacher->email) < 10)
                return false;

        if(property_exists($teacher, "password"))
            if (strlen($teacher->password) < 8)
                return false;

        return true;
    }
}