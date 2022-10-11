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

        $typelist = Input::get('typelist');

        $result = $this->schoolModel->fetchAll();

        if(is_array($result)){
            switch ($typelist) {
               case "1":
                   return $this->load("components/list", [
                       'schools' => $result
                   ]);       
               break;
               case "2":
                   return $this->load("components/list", [
                       'schools_type2' => $result
                   ]);
                
               break;
               default:
                   return $this->load("components/list", [
                       'schools' => $result
                   ]);    
               break;
           }
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
            "confirmPassword" => Input::post("confirmpassword")
        ];

        $this->registerValidate($school);

        $result = $this->schoolModel->register($school);

        if ($result <= 0) {
            $this->showMessage(
                'Erro ao Cadastrar Nova Escola', 
                'Algum Erro interno está impedindo o cadastro. É recomendado que atualize o navegador e tente novamente. Caso o erro persista, tente mais tarde ou informe a equipe de desenvolvimento em: techtechetec@gmail.com',
            );
            die();
        }

        $this->showMessage(
            'Cadastrado com sucesso', 
            'você foi registrado dentro do sistema. clique no botão em baixo para seguir para tela de signIn!',
            BASE . "signin",
            200
        );

    }

    public function update(){
        $school = (object)[
            "id"        => Input::post('id'),
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'password' => Input::post('password'),
        ];

        $this->updateValidate($school);

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

        $this->showMessage(
            'Atualizado com sucesso!', 
            'Os dados fornecidos sobrescreveram os dados anteriores. Você será redirecionado para a mesma página de edição.',
        );

        die();
    }

    private function registerValidate(Object $school){
  
        if (strlen($school->name) < 3) {
            $this->showMessage(
                'Formulário inválido', 
                'O nome da escola tem menos do que 3 caractéres',
            );

            die();
        }
        

        if (str_starts_with($school->name, "@") === false) {
            $this->showMessage(
                'Formulário inválido', 
                'O nome da escola precisa começar a obrigatóriamente com @',
            );
        
            die();
        }

        if (strlen($school->email) < 10) {
            $this->showMessage(
                'Formulário inválido', 
                'O email da escola tem menos do que 10 caractéres',
            );

            die();
        }
            

       
        if (strlen($school->password) < 8) {
            $this->showMessage(
                'Formulário inválido', 
                'Senha tem que ser igual ou maior do que 8 caracteres ',
            );

            die();
        }
          
        if($school->password !== $school->confirmPassword) {
            $this->showMessage(
                'Formulário inválido', 
                'Senha e senha de confirmação não coincidem',
            );

            die();
        }
           

     
    }

    private function updateValidate(Object $school){
  
        if(property_exists($school, "name")) {
            if (strlen($school->name) < 3) {
                $this->showMessage(
                    'Formulário inválido', 
                    'O nome da escola tem menos do que 3 caractéres',
                );
    
                die();
            }  

            if (str_starts_with($school->name, "@") === false) {
                $this->showMessage(
                    'Formulário inválido', 
                    'O nome da escola precisa começar a obrigatóriamente com @',
                );
            
                die();
            }
        }

        if(property_exists($school, "email")) {
            if (strlen($school->email) < 10) {
                $this->showMessage(
                    'Formulário inválido', 
                    'O email da escola tem menos do que 10 caractéres',
                );
    
                die();
            }
        }

        if(property_exists($school, "password")) {
            if (strlen($school->password) < 8) {
                $this->showMessage(
                    'Formulário inválido', 
                    'Senha tem que ser igual ou maior do que 8 caracteres ',
                );
    
                die();
            }

            if($school->password !== $school->confirmPassword) {
                $this->showMessage(
                    'Formulário inválido', 
                    'Senha e senha de confirmação não coincidem',
                );
    
                die();
            }
        }
    }
}