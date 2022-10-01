<?php

namespace app\controller;

use app\model\ClassModel;
use app\core\Controller;

use  app\classes\Input;

class ClassController extends Controller{
    private $classModel;

    public function __construct() {
        $this->classModel = new ClassModel();
    }

    public function fetchAll() {

        $db_response = $this->classModel->fetchAll();

        console_log($db_response);
    }

    public function fetchById() {
        $id = Input::post('id');

        $db_response = $this->classModel->fetchById($id);

        console_log($db_response);
    }

    public function register(){
        $class = (object)[
            'name'      => Input::post('name'),
            'code'    => Input::post('code'),
        ];

        if (!$this->registerValidate($class)) {
            return  $this->showMessage(
                'Formulário inválido', 
                'Os dados fornecidos são inválidos',
                BASE,
                422
            );
        }

        $db_response = $this->classModel->register($class);

        if ($db_response <= 0) {
            echo 'Erro no Cadastro';
            die();
        }

        console_log($db_response);

    }

    public function update(){
        $class = (object)[
            "id"        => Input::post('id'),
            'name'      => Input::post('name'),
            'code'    => Input::post('code'),
        ];

        if (!$this->updateValidate($class)) {
            return  $this->showMessage(
                'Formulário inválido', 
                'Os dados fornecidos são inválidos',
                BASE,
                422
            );
        }

        $db_response = $this->classModel->update($class);

        if ($db_response <= 0) {
            echo 'Erro no Cadastro';
            die();
        }

        console_log($db_response);

    }

    private function registerValidate(Object $class){
  
        if (strlen($class->name) < 3)
            return false;

        if (strlen($class->code) !== 6)
            return false;

        return true;
    }

    private function updateValidate(Object $class){
  
        if(property_exists($class, "name"))
            if (strlen($class->name) < 3)
                return false;

        if(property_exists($class, "code"))
            if (strlen($class->code) !== 6)
                return false;

        return true;
    }
}