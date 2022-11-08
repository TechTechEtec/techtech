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

        $typelist = Input::get('typelist');

        $result = $this->studentModel->fetchAll();

        if(is_array($result)){
            switch ($typelist) {
               case "1":
                   return $this->load("components/list", [
                       'students' => $result
                   ]);       
               break;
               case "2":
                   return $this->load("components/list", [
                       'students_type2' => $result
                   ]);
                
               break;
               default:
                   return $this->load("components/list", [
                       'students' => $result
                   ]);    
               break;
           }
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
            'name'     => Input::post('name'),
            'email'    => Input::post('email'),
            'birthday' => Input::post('birthday'),
            'password' => Input::post('password'),
            "confirmPassword" => Input::post("confirmpassword"),
            "avatar"   => Input::post("avatar")
        ];

        $this->registerValidate($student);

        $result = $this->studentModel->register($student);

        if (!is_array($result)) {
            $this->showMessage(
                'Erro ao Cadastrar Novo Aluno', 
                $result,
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

    // Router Controller
    public function update(){
        $student = (object)[
            "id"        => Input::post('id'),
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'birthday' => Input::post('birthday'),
            'password' => Input::post('password'),
        ];

        $this->updateValidate($student);
    
        $result = $this->studentModel->update($student);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro para atualizar estudante', 
                'Algum Erro interno está impedindo a atualização. É recomendado que atualize o navegador e tente novamente. Caso o erro persista, tente mais tarde ou informe a equipe de desenvolvimento em: techtechetec@gmail.com',
            );

            die();
        }

        $this->showMessage(
            'Atualizado com sucesso!', 
            'Os dados fornecidos sobrescreveram os dados anteriores. Você será redirecionado para a mesma página de edição.',
        );

        die();
    }

    private function registerValidate(Object $student){
  
        if (strlen($student->name) < 3) {

            $this->showMessage(
                'Formulário inválido', 
                'O nome do aluno tem menos do que 3 caractéres',
            );

            die();
        }

        if (strlen($student->email) < 10) {
            $this->showMessage(
                'Formulário inválido', 
                'O email da escola tem menos do que 10 caractéres',
            );

            die();
        }

        if (strlen($student->password) < 8) {
            $this->showMessage(
                'Formulário inválido', 
                'Senha tem que ser igual ou maior do que 8 caracteres ',
            );

            die();
        }
          
        if($student->password !== $student->confirmPassword) {
            $this->showMessage(
                'Formulário inválido', 
                'Senha e senha de confirmação não coincidem',
            );

            die();
        }

        if(strlen($student->avatar) <= 0) {
            $this->showMessage(
                'Formulário inválido', 
                'Não foi escolhido um avatar para o usuário',
            );

            die();
        }
    }

    private function updateValidate(Object $student){
  
        if(property_exists($student, "name")) {
            if (strlen($student->name) < 3) {

                $this->showMessage(
                    'Formulário inválido', 
                    'O nome do aluno tem menos do que 3 caractéres',
                );
    
                die();
            }
        }

        if(property_exists($student, "email")) {
            if (strlen($student->email) < 10) {
                $this->showMessage(
                    'Formulário inválido', 
                    'O nome do aluno tem menos do que 10 caractéres',
                );
    
                die();
            }
    
            if (strpos($student->email, "@gmail.com") === false) {
                $this->showMessage(
                    'Formulário inválido', 
                    'O email tem que ser do domínio @gmail.com',
                );
            
                die();
            }
    
        }

        if(property_exists($student, "password")) {

            if (strlen($student->password) < 8) {
                $this->showMessage(
                    'Formulário inválido', 
                    'Senha tem que ser maior do que 8 caracteres e menor do que 16',
                );
    
                die();
            }
              
            if($student->password !== $student->confirmPassword) {
                $this->showMessage(
                    'Formulário inválido', 
                    'Senha e senha de confirmação não coincidem',
                );
    
                die();
            }
        }
    }
}