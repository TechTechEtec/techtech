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

     // AJAX Controller
     public function fetchAll() {

        $result = $this->classModel->fetchAll();

        if(is_array($result)){
           return $this->load("components/list", [
                'classes' => $result
            ]);     
        }

        return  $this->showMessage('Erro para buscar turmas', $result, BASE);
    }

     // AJAX Controller
     public function fetchById() {
        $id = Input::get('id');

        $result = $this->classModel->fetchById($id);

        if(is_array($result)){
            return $this->load("components/item", [
                'class' => $result
            ]);
         }

        return  $this->showMessage('Erro para buscar turma pelo ID', $result, BASE);
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

        $result = $this->classModel->register($class);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro ao Cadastrar Nova Turma', 
                'Algum Erro interno está impedindo o cadastro. É recomendado que atualize o navegador e tente novamente. Caso o erro persista, tente mais tarde ou informe a equipe de desenvolvimento em: techtechetec@gmail.com',
                BASE,
                422
            );
            die();
        }

        return $this->load("signin/main", [
            'user' => $result
        ]);

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

        $result = $this->classModel->update($class);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro para atualizar turma', 
                'Algum Erro interno está impedindo a atualização dos dados. É recomendado que atualize o navegador e tente novamente. Caso o erro persista, tente mais tarde ou informe a equipe de desenvolvimento em: techtechetec@gmail.com',
                BASE,
                422
            );
            die();
        }

        echo '<script>window.history.back();</script>';
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