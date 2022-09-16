<?php

namespace app\model;

use app\core\Model;

class SoloStudentModel extends Model{

    private $db;

    public function __construct(){
        $this->db = $this->service->initializeDatabase("cad_aluno", "id_aluno");
        
    }

    public function fetch(){   #Aqui vamos buscar infos do supabase
        try{
            $listStudents = $this->db->fetchAll()->getResult(); //fetch all products
            return $listStudents;
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function insert(object $student){ #Inserir os dados no banco 
        $newStudent = [
            'nome_aluno'      => $student->nome_aluno,
            'email_aluno'    => $student->email_aluno,
            'data_nascimento_aluno' => $student->data_nascimento,
            'senha_aluno' => $student->senha,
        ];
        
        try{
            $data = $this->db->insert($newStudent);
            return $data;
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function delete(){ #Apagar
        
    }

    public function update(){ #Atualizar os dados do banco
        
    }
}