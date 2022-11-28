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

    // Router Controller
    public function register(){
        $teacher = (object)[
            'schoolName' => Input::post('schoolName'),
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'password' => Input::post('password'),
            'confirmPassword' => Input::post('confirmpassword'),
            "avatar"   => Input::post("avatar")
        ];

        // Validating Data

        $this->registerValidate($teacher);
        
        // if the code pass from line 59 the validaation passed succefully

        $result = $this->teacherModel->register($teacher);

        if (!is_array($result)) {
            $this->showMessage(
                'Erro ao Cadastrar Novo Professor', 
                $result,
            );

            die();
        }

        if($_SESSION['perfil'] === 'school') {
            return $this->showMessage(
                'Cadastrado com sucesso', 
                'Professor registrado dentro do sistema. clique no botão em baixo para retornar para tela de registro de professor!',
                BASE . "signup-teacher-byschool",
                200
            );

        
        }
        
        return $this->showMessage(
            'Cadastrado com sucesso', 
            'você foi registrado dentro do sistema. clique no botão em baixo para seguir para tela de signIn!',
            BASE . "signin",
            200
        );
    }

    // Router Controller
    public function update(){
        $student = (object)[
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'bio' => Input::post('bio'),
            'old_password' => Input::post('old_password'),
            'new_password' => Input::post('new_password'),
        ];

        $teacher_filtered = $this->updateValidate($student);

        $result = $this->teacherModel->update($teacher_filtered);

        if (!is_array($result)) {
            return  $this->showMessage(
                'Erro para atualizar professor', 
                $result,
            );
        }

        if(property_exists($result[0], "email")){
            $_SESSION['name'] = $result[0]->name;
        }

        if(property_exists($result[0], "email")){
            $_SESSION['email'] = $result[0]->email;
        }

        if(property_exists($result[0], "bio")){
            $_SESSION['bio'] = $result[0]->bio;
        }

       return $this->showMessage(
            'Atualizado com sucesso!', 
            'Os dados fornecidos sobrescreveram os dados anteriores. Você será redirecionado para tela de dashboard',
        );
    }


    private function registerValidate(Object $teacher){

        if (strlen($teacher->schoolName) < 3) {
            $this->showMessage(
                'Formulário inválido', 
                'O nome da instituição tem menos do que 3 caractéres',
            );

            die();
        }

        if (str_starts_with($teacher->schoolName, "@") === false) {
            $this->showMessage(
                'Formulário inválido', 
                'O nome da escola precisa começar a obrigatóriamente com @',
            );
        
            die();
        }
         
        if (strlen($teacher->name) < 3) {
            $this->showMessage(
                'Formulário inválido', 
                'O nome do professor tem menos do que 3 caractéres',
            );

            die();
        }
          
        if (strlen($teacher->email) < 10 ) {
            $this->showMessage(
                'Formulário inválido', 
                'O email tem menos do que 10 caracteres precisa incluir @gmail.com',
            );
        
            die();
        }

        if (strlen($teacher->password) < 8) {
            $this->showMessage(
                'Formulário inválido', 
                'Senha tem que ser maior do que 8 caracteres e menor do que 16',
            );

            die();
        }
          
        if($teacher->password !== $teacher->confirmPassword) {
            $this->showMessage(
                'Formulário inválido', 
                'Senha e senha de confirmação não coincidem',
            );

            die();
        }

        if(strlen($teacher->avatar) <= 0) {
            $this->showMessage(
                'Formulário inválido', 
                'Não foi escolhido um avatar para o usuário',
            );

            die();
        }

    }

    private function updateValidate(Object $teacher){

        $teacher_filtered = (object)[];

        if(property_exists($teacher, "name") && strlen($teacher->name) >= 1) {
            if (strlen($teacher->name) < 3) {

                $this->showMessage(
                    'Formulário inválido', 
                    'O nome do professor tem menos do que 3 caracteres',
                );
    
                die();
            }

            $teacher_filtered->name = $teacher->name;
        }

        if(property_exists($teacher, "email") && strlen($teacher->email) >= 1) {
            if (strlen($teacher->email) < 10) {
                $this->showMessage(
                    'Formulário inválido', 
                    'O email não está no padrão correto',
                );
    
                die();
            }

            $teacher_filtered->email = $teacher->email;
    
        }

        if(property_exists($teacher, "bio") && strlen($teacher->bio) >= 1) {
            if (strlen($teacher->email) < 10) {
                $this->showMessage(
                    'Formulário inválido', 
                    'A biografia deve ter mais do que 10 caracteres',
                );
    
                die();
            }

            $teacher_filtered->bio = $teacher->bio;
    
        }

        if(property_exists($teacher, "old_password") && strlen($teacher->old_password) >= 1) {

            if (strlen($teacher->old_password) < 8) {
                $this->showMessage(
                    'Formulário inválido', 
                    'A Senha antiga tem que ser maior do que 8 caracteres',
                );
    
                die();
            }
              
            if(property_exists($teacher, "new_password") && strlen($teacher->new_password) >= 1) {

                if (strlen($teacher->new_password) < 8) {
                    $this->showMessage(
                        'Formulário inválido', 
                        'A nova senha tem que ser maior do que 8 caracteres',
                    );
        
                    die();
                }
    
                $teacher_filtered->new_password = $teacher->new_password;
            }

            if($teacher->old_password == $teacher->new_password) {
                $this->showMessage(
                    'Formulário inválido', 
                    'A senha nova não pode ser a mesma que a antiga!',
                );
    
                die();                
            }

            $teacher_filtered->old_password = $teacher->old_password;
            $teacher_filtered->new_password = $teacher->new_password;

        }


        return $teacher_filtered;
    }
}