<?php

namespace app\model;

use app\Core\Model;
use Exception;

class TeacherModel extends Model{

    private $db;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeDatabase("cad_teacher", "id");
    }

    public function fetchAll(){   # Get All Teachers from DataBase
        try {
            $listTeachers = $this->db->fetchAll()->getResult(); 
            return $listTeachers;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
       
    
    }

    public function fetchById(string $id){   # Get All Teachers from DataBase
        try {
            $teacher= $this->db->findBy("id", $id)->getResult();
            return $teacher;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function register(object $teacher){ # Register Teacher on DataBase
        $newTeacher = [
            'name'     => $teacher->name,
            'email'    => $teacher->email,
            'password' => $$teacher->password,
        ];
        
        try {
            $data = $this->db->insert($newTeacher);
            return $data;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function update(object $teacher){  # Update Teacher on DataBase

        $updatedData = [];


        if(property_exists($teacher, "name"))
            $updatedData["name"] = $teacher->name;

        if(property_exists($teacher, "email"))
            $updatedData["email"] = $teacher->email;
            
        if(property_exists($teacher, "password"))
            $updatedData["password"] = $teacher->password;
    
        
        
        try {
            $data = $this->db->update($teacher->id, $updatedData);
            return $data;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
    }


}

 # ADD LATER INFOS FROM SUPABASE 
 # id_school
 #id_class