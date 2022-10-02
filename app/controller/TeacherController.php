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

    // AJAX Controller
    public function fetchAll() {

        $result = $this->teacherModel->fetchAll();

        if(is_array($result)){
            return $this->load("components/list", [
                 'teachers' => $result
             ]);     
         }
 
        return  $this->showMessage('Erro para buscar professores', $result, BASE);


    }

    // AJAX Controller
    public function fetchById() {
        $id = Input::get('id');

        $result = $this->teacherModel->fetchById($id);

        if(is_array($result)){
            return $this->load("components/item", [
                'teacher' => $result
            ]);
         }

        return  $this->showMessage('Erro para buscar estudante pelo ID', $result, BASE);
    }

    // Router Controller
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

        $result = $this->teacherModel->register($teacher);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro ao Cadastrar Novo Professor', 
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

    // Router Controller
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

        $result = $this->teacherModel->update($teacher);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro para atualizar professor', 
                'Algum Erro interno está impedindo a atualização dos dados. É recomendado que atualize o navegador e tente novamente. Caso o erro persista, tente mais tarde ou informe a equipe de desenvolvimento em: techtechetec@gmail.com',
                BASE,
                422
            );

            die();
        }

        echo '<script>window.history.back();</script>';
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