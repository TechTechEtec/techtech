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

        $typelist = Input::get('typelist');

        $result = $this->teacherModel->fetchAll();


        if(is_array($result)){
             switch ($typelist) {
                case "1":
                    return $this->load("components/list", [
                        'teachers' => $result
                    ]);       
                break;
                case "2":
                    return $this->load("components/list", [
                        'teachers_type2' => $result
                    ]);  
                break;
            }
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
            'schoolName' => Input::post('schoolName'),
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'password' => Input::post('password'),
            'confirmPassword' => Input::post('confirmpassword'),
        ];

        // Validating Data

        $this->registerValidate($teacher);
        
        // if the code pass from line 59 the validaation passed succefully

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
        


        header("Location: " . BASE . "signup-teacher");
    }

    // Router Controller
    public function update(){
        $teacher = (object)[
            "id"        => Input::post('id'),
            'schoolName' => Input::post('schoolName'),
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

        if (strlen($teacher->schoolName) < 3) {
            $this->showMessage(
                'Formulário inválido', 
                'O nome da instituição tem menos do que 3 caractéres',
                BASE . 'signup-teacher',
                422
            );

            die();
        }
         
        if (strlen($teacher->name) < 3) {
            $this->showMessage(
                'Formulário inválido', 
                'O nome do professor tem menos do que 3 caractéres',
                BASE . 'signup-teacher',
                422
            );

            die();
        }
          
        if (strlen($teacher->email) < 10 ) {
            $this->showMessage(
                'Formulário inválido', 
                'O email tem menos do que 10 caracteres precisa incluir @gmail.com',
                BASE . 'signup-teacher',
                422
            );
        
            die();
        }
           
        if (strpos($teacher->email, "@gmail.com") === false) {
            $this->showMessage(
                'Formulário inválido', 
                'O email tem que ser do domínio @gmail.com',
                BASE . 'signup-teacher',
                422
            );
        
            die();
        }

        if (strlen($teacher->password) < 8) {
            $this->showMessage(
                'Formulário inválido', 
                'Senha tem que ser maior do que 8 caracteres e menor do que 16',
                BASE . 'signup-teacher',
                422
            );

            die();
        }
          
        if($teacher->password !== $teacher->confirmPassword) {
            $this->showMessage(
                'Formulário inválido', 
                'Senha e senha de confirmação não coincidem',
                BASE . 'signup-teacher',
                422
            );

            die();
        }

    }

    private function updateValidate(Object $teacher){
  
        if(property_exists($teacher, "schoolName"))
        if (strlen($teacher->schoolName) < 3)
            return false;

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