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

     // AJAX Controller
     public function fetchAll() {

        $result = $this->schoolModel->fetchAll();

        if(is_array($result)){
            return $this->load("components/list", [
                 'schools' => $result
             ]);     
         }
 
        return  $this->showMessage('Erro para buscar escolas', $result, BASE);
    }

    // AJAX Controller
    public function fetchById() {
        $id = Input::get('id');

        $result = $this->schoolModel->fetchById($id);

        if(is_array($result)){
            return $this->load("components/item", [
                'school' => $result
            ]);
         }

        return  $this->showMessage('Erro para buscar escola pelo ID', $result, BASE);
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
                BASE,
                422
            );
        }

        $result = $this->schoolModel->register($school);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro ao Cadastrar Nova Escola', 
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
                BASE,
                422
            );
        }

        $db_response = $this->schoolModel->update($school);

        if ($db_response <= 0) {
            return  $this->showMessage(
                'Erro para atualizar escola', 
                'Algum Erro interno está impedindo a atualização dos dados. É recomendado que atualize o navegador e tente novamente. Caso o erro persista, tente mais tarde ou informe a equipe de desenvolvimento em: techtechetec@gmail.com',
                BASE,
                422
            );

            die();
        }

        echo '<script>window.history.back();</script>';
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