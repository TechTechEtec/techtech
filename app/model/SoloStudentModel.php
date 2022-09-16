<?php

namespace app\model;


class SoloStudentModel {

    private $service;

    public function __construct() {
        
        $SUPABASE_ANON_KEY = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImNydnNyd3ZzeG1uenVsdHJmY3pmIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NjMyODUwNDYsImV4cCI6MTk3ODg2MTA0Nn0.INfFE2I8r2kE346phxvRXvTUaRvkJ21c3vCh-7SYTE0";
        $SUPABASE_PUBLIC_URL = "https://crvsrwvsxmnzultrfczf.supabase.co";
    

        $this->service = new \PHPSupabase\Service(
        $SUPABASE_ANON_KEY, 
        $SUPABASE_PUBLIC_URL . "/rest/v1"
        );
        



    }

    public function fetch(){   #Aqui vamos buscar infos do supabase

        $db = $this->service->initializeDatabase('cad_aluno');

        try{
            $listStudents = $db->fetchAll()->getResult(); //fetch all products
            return $listStudents;
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function insert(){ #Inserir os dados no banco 
        
    }

    public function delete(){ #Apagar
        
    }

    public function update(){ #Atualizar os dados do banco
        
    }
}