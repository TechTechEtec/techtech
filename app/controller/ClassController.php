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

        $typelist = Input::get('typelist');

        $result = $this->classModel->fetchAll();

        if(is_array($result)){
            switch ($typelist) {
               case "1":
                   return $this->load("components/list", [
                       'classes' => $result
                   ]);       
               break;
               case "2":
                   return $this->load("components/list", [
                       'classes_type2' => $result
                   ]);
                
               break;
               default:
                   return $this->load("components/list", [
                       'classes' => $result
                   ]);    
               break;
           }
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
            'name'           => Input::post('name'),
            'teacher_email'       => Input::post('teachers'),
            'code'           => Input::post('code'),
            'confirmCode'    => Input::post('confirmcode')
        ];


        $this->registerValidate($class);

        $result = $this->classModel->register($class);

        if ($result <= 0) {
             $this->showMessage(
                'Erro ao Cadastrar Nova Turma', 
                'Algum Erro interno está impedindo o cadastro. É recomendado que atualize o navegador e tente novamente. Caso o erro persista, tente mais tarde ou informe a equipe de desenvolvimento em: techtechetec@gmail.com',
            );

            die();
        }

        $this->showMessage(
            'Sucesso ao cadastrar a turma de código ' . $class->code, 
            'Você será redirecionado para mesma tela de criação de turmas. Você pode continuar criando mais turmas além de visualizar todas as que você já cadastrou',
            BASE . 'signup-class',
            200
        );
            
        die();

    }

    public function update(){
        $class = (object)[
            "id"        => Input::post('id'),
            'name'      => Input::post('name'),
            'code'    => Input::post('code'),
            "teacher_email" => Input::post('teachers')
        ];

        $this->updateValidate($class);
  
        $result = $this->classModel->update($class);

        if ($result <= 0) {
            return  $this->showMessage(
                'Erro para atualizar turma', 
                'Algum Erro interno está impedindo a atualização dos dados. É recomendado que atualize o navegador e tente novamente. Caso o erro persista, tente mais tarde ou informe a equipe de desenvolvimento em: techtechetec@gmail.com',
            );
            die();
        }

        $this->showMessage(
            'Atualizado com sucesso!', 
            'Os dados fornecidos sobrescreveram os dados anteriores. Você será redirecionado para a mesma página de edição.',
        );

        die();
    }

    private function registerValidate(Object $class){
  
        if (strlen($class->name) < 3) { 
            $this->showMessage(
                'Formulário inválido', 
                'O nome da turma tem menos do que 3 caractéres',
            );

            die();
        }


        if (strlen($class->code) !== 6) {
            $this->showMessage(
                'Formulário inválido', 
                'O código da turma tem menos do que deve ter 6 caractéres',
            );

            die();
        }

        if ($class->confirmCode !== $class->code) {
            $this->showMessage(
                'Formulário inválido', 
                'O código da turma e o código de confirmação não coincidem',
            );

            die();
        }

        if (strlen($class->teacher_email) == 0) {
            $this->showMessage(
                'Formulário inválido', 
                'Não foi selecionado um professor para a turma. Volte para a página e escolha um dos professores disponíveis. Se necessário, cadastre um novo professor',
            );

            die();
        }

    }

    private function updateValidate(Object $class){
  
        if(property_exists($class, "name")) {
            if (strlen($class->name) < 3) { 
                $this->showMessage(
                    'Formulário inválido', 
                    'O nome da turma tem menos do que 3 caractéres',
                );
    
                die();
            }
        }

        if(property_exists($class, "code")) {
            if (strlen($class->code) !== 6) {
                $this->showMessage(
                    'Formulário inválido', 
                    'O código da turma tem menos do que deve ter 6 caractéres',
                );
    
                die();
            }
    
            if ($class->confirmCode !== $class->code) {
                $this->showMessage(
                    'Formulário inválido', 
                    'O código da turma e o código de confirmação não coincidem',
                );
    
                die();
            }
        }

        if(property_exists($class, "teacher_email")) {
            if (strlen($class->teacher_email) == 0) {
                $this->showMessage(
                    'Formulário inválido', 
                    'Não foi selecionado um professor para a turma. Volte para a página e escolha um dos professores disponíveis. Se necessário, cadastre um novo professor',
                );
    
                die();
            }
        }


    }
}