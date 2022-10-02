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

    // AJAX Controller
    public function fetchAll() {

        $result = $this->studentModel->fetchAll();

        if(is_array($result)){
           return $this->load("components/list", [
                'students' => $result
            ]);     
        }

        return  $this->showMessage('Erro para buscar estudantes', $result, BASE);

    }

    // AJAX Controller
    public function fetchById() {
        $id = Input::get('id');

        $result = $this->studentModel->fetchById($id);

        if(is_array($result)){
            return $this->load("components/item", [
                'student' => $result
            ]);
         }

        return  $this->showMessage('Erro para buscar estudante pelo ID', $result, BASE);
    }

    // Router Controller
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
                BASE ,
                422
            );
        }

        $result = $this->studentModel->register($student);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro ao Cadastrar Novo Aluno', 
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
                BASE,
                422
            );
        }

        $result = $this->studentModel->update($student);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro ao Cadastrar Novo Professor', 
                'Algum Erro interno está impedindo a atualização. É recomendado que atualize o navegador e tente novamente. Caso o erro persista, tente mais tarde ou informe a equipe de desenvolvimento em: techtechetec@gmail.com',
                BASE,
                422
            );

            die();
        }

       echo '<script>window.history.back();</script>';

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