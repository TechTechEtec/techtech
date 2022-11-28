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

    public function register(){
        $school = (object)[
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'password' => Input::post('password'),
            "confirmPassword" => Input::post("confirmpassword"),
            "avatar"   => Input::post("avatar")
        ];

        $this->registerValidate($school);

        $result = $this->schoolModel->register($school);

        if (!is_array($result)) {
            $this->showMessage(
                'Erro ao Cadastrar Nova Escola', 
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
        $school = (object)[
            'email'    => Input::post('email'),
            'bio' => Input::post('bio'),
            'old_password' => Input::post('old_password'),
            'new_password' => Input::post('new_password'),
        ];

        $school_filtered = $this->updateValidate($school);

        $result = $this->schoolModel->update($school_filtered);

        if (!is_array($result)) {
            return  $this->showMessage(
                'Erro para atualizar Escola', 
                $result,
            );
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

        if(strlen($school->avatar) <= 0) {
            $this->showMessage(
                'Formulário inválido', 
                'Não foi escolhido um avatar para o usuário',
            );

            die();
        }
                
    }

    private function updateValidate(Object $school){

        $school_filtered = (object)[];


        if(property_exists($school, "email") && strlen($school->email) >= 1) {
            if (strlen($school->email) < 10) {
                $this->showMessage(
                    'Formulário inválido', 
                    'O email não está no padrão correto',
                );
    
                die();
            }

            $school_filtered->email = $school->email;
    
        }

        if(property_exists($school, "bio") && strlen($school->bio) >= 1) {
            if (strlen($school->email) < 10) {
                $this->showMessage(
                    'Formulário inválido', 
                    'A biografia deve ter mais do que 10 caracteres',
                );
    
                die();
            }

            $school_filtered->bio = $school->bio;
    
        }

        if(property_exists($school, "old_password") && strlen($school->old_password) >= 1) {

            if (strlen($school->old_password) < 8) {
                $this->showMessage(
                    'Formulário inválido', 
                    'A Senha antiga tem que ser maior do que 8 caracteres',
                );
    
                die();
            }
              
            if(property_exists($school, "new_password") && strlen($school->new_password) >= 1) {

                if (strlen($school->new_password) < 8) {
                    $this->showMessage(
                        'Formulário inválido', 
                        'A nova senha tem que ser maior do que 8 caracteres',
                    );
        
                    die();
                }
    
                $school_filtered->new_password = $school->new_password;
            }

            if($school->old_password == $school->new_password) {
                $this->showMessage(
                    'Formulário inválido', 
                    'A senha nova não pode ser a mesma que a antiga!',
                );
    
                die();                
            }

            $school_filtered->old_password = $school->old_password;
            $school_filtered->new_password = $school->new_password;

        }


        return $school_filtered;
    }
}