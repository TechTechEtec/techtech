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
            'name'      => Input::post('name'),
            'email'    => Input::post('email'),
            'bio' => Input::post('bio'),
            'old_password' => Input::post('old_password'),
            'new_password' => Input::post('new_password'),
        ];

        $student_filtered = $this->updateValidate($student);

        $result = $this->studentModel->update($student_filtered);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro para atualizar estudante', 
                'Verifique se a senha antiga coincide com a cadastrada. Se o erro persistir tente mais tarde ou reporte o administrador em projetotechtech@gmail.com',
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

    public function leaveClassRoom() {
        $class = (object)[
            'classcode'     => null
        ];

        $result = $this->studentModel->update($class);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro para atualizar estudante', 
                'Verifique se a senha antiga coincide com a cadastrada. Se o erro persistir tente mais tarde ou reporte o administrador em projetotechtech@gmail.com',
            );
        }

   
        $_SESSION['classcode'] = $result[0]->classcode;

        return $this->showMessage(
            'Você saiu da turma', 
            'Você será redirecionado para a tela principal',
        );

    }

    public function enterClassRoom() {
        $class = (object)[
            'classcode'     => Input::post("classcode")
        ];

        $result = $this->studentModel->update($class);

        if (sizeof($result) !== 1) {
            return  $this->showMessage(
                'Erro para atualizar estudante', 
                'Verifique se a senha antiga coincide com a cadastrada. Se o erro persistir tente mais tarde ou reporte o administrador em projetotechtech@gmail.com',
            );
        }

   
        $_SESSION['classcode'] = $result[0]->classcode;

        return $this->showMessage(
            'Você entrou em uma Turma', 
            'Agora você pode acessar a aba "sala de aula" para interagir e disputar o primeiro lugar no rank',
        ); 
    }

    private function registerValidate(Object $student){
  
        if (strlen($student->name) < 3) {

            $this->showMessage(
                'Formulário inválido', 
                'O nome do aluno tem menos do que 3 caracteres',
            );

            die();
        }

        if (strlen($student->email) < 10) {
            $this->showMessage(
                'Formulário inválido', 
                'O email da escola tem menos do que 10 caracteres',
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

        $student_filtered = (object)[];

        if(property_exists($student, "name") && strlen($student->name) >= 1) {
            if (strlen($student->name) < 3) {

                $this->showMessage(
                    'Formulário inválido', 
                    'O nome do aluno tem menos do que 3 caracteres',
                );
    
                die();
            }

            $student_filtered->name = $student->name;
        }

        if(property_exists($student, "email") && strlen($student->email) >= 1) {
            if (strlen($student->email) < 10) {
                $this->showMessage(
                    'Formulário inválido', 
                    'O email não está no padrão correto',
                );
    
                die();
            }

            $student_filtered->email = $student->email;
    
        }

        if(property_exists($student, "bio") && strlen($student->bio) >= 1) {
            if (strlen($student->email) < 10) {
                $this->showMessage(
                    'Formulário inválido', 
                    'A biografia deve ter mais do que 10 caracteres',
                );
    
                die();
            }

            $student_filtered->bio = $student->bio;
    
        }

        if(property_exists($student, "old_password") && strlen($student->old_password) >= 1) {

            if (strlen($student->old_password) < 8) {
                $this->showMessage(
                    'Formulário inválido', 
                    'A Senha antiga tem que ser maior do que 8 caracteres',
                );
    
                die();
            }
              
            if(property_exists($student, "new_password") && strlen($student->new_password) >= 1) {

                if (strlen($student->new_password) < 8) {
                    $this->showMessage(
                        'Formulário inválido', 
                        'A nova senha tem que ser maior do que 8 caracteres',
                    );
        
                    die();
                }
    
                $student_filtered->new_password = $student->new_password;
            }

            if($student->old_password == $student->new_password) {
                $this->showMessage(
                    'Formulário inválido', 
                    'A senha nova não pode ser a mesma que a antiga!',
                );
    
                die();                
            }

            $student_filtered->old_password = $student->old_password;
            $student_filtered->new_password = $student->new_password;

        }

        if(property_exists($student, "classcode") && strlen($student->classcode) >= 1) {
            if (strlen($student->classcode) > 10) {

                return $this->showMessage(
                    'Formulário inválido', 
                    'O código da turma não pode passar de 10 caracteres',
                );
    
                die();
            }

            $student_filtered->classcode = $student->classcode;
        }

        return $student_filtered;
    }
}