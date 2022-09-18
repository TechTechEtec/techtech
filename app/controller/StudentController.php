<?php

namespace app\controller;

use app\model\StudentModel;
use app\core\Controller;

use  app\classes\Input;

class StudentController extends Controller {
    private $studentModel;

    public function __construct(){ 
        $this->studentModel = new StudentModel();
    }

    public function fetchAll() {

        $db_response = $this->studentModel->fetchAll();

        console_log($db_response);
    }

    public function fetchById() {
        $id = Input::post('id');

        $db_response = $this->studentModel->fetchById($id);

        console_log($db_response);
    }

    public function register(){
        $student = (object)[
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'birthday' => Input::post('birthday'),
            'password' => Input::post('password'),
        ];

        if (!$this->registerValidate($student)) {
            return  $this->showMessage(
                'Formulário inválido', 
                'Os dados fornecidos são inválidos',
                BASE  . '/',
                422
            );
        }

        $db_response = $this->studentModel->register($student);

        if ($db_response <= 0) {
            echo 'Erro no Cadastro';
            die();
        }

        console_log($db_response);

    }

    public function update(){
        $student = (object)[
            "id"        => Input::post('id'),
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'birthday' => Input::post('birthday'),
            'password' => Input::post('password'),
        ];

        if (!$this->updateValidate($student)) {
            return  $this->showMessage(
                'Formulário inválido', 
                'Os dados fornecidos são inválidos',
                BASE  . '/',
                422
            );
        }

        $db_response = $this->studentModel->update($student);

        if ($db_response <= 0) {
            echo 'Erro no Cadastro';
            die();
        }

        console_log($db_response);

    }

    public function addClass(){  # Update Student on DataBase

        $id_student = Input::post("id_student");
        $cod_class = Input::post("cod_class");
        
        $db_response = $this->studentModel->addClass($id_student, $cod_class);
        
        console_log($db_response);
    }

    private function registerValidate(Object $student){
  
        if (strlen($student->name) < 3)
            return false;

        if (strlen($student->email) < 10)
            return false;

        if (strlen($student->password) < 8)
            return false;

        return true;
    }

    private function updateValidate(Object $student){
  
        if(property_exists($student, "name"))
            if (strlen($student->name) < 3)
                return false;

        if(property_exists($student, "email"))
            if (strlen($student->email) < 10)
                return false;

        if(property_exists($student, "password"))
            if (strlen($student->password) < 8)
                return false;

        return true;
    }
}