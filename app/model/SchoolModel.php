<?php

namespace app\model;

use app\Core\Model;
use Exception;

class SchoolModel extends Model{

    private $db;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeDatabase("cad_school", "id");
    }

    public function fetchAll(){   # Get All Schools from DataBase
        try {
            $listSchools= $this->db->fetchAll()->getResult(); 
            return $listSchools;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
       
    
    }

    public function fetchById(string $id){   # Get All Schools from DataBase
        try {
            $schools = $this->db->findBy("id", $id)->getResult();
            return $school;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function register(object $school){ # Register School on DataBase
        $newSchool = [
            'name'      => $school->name,
            'email'    => $school->email,
            'password' => $school->password,
        ];
        
        try {
            $data = $this->db->insert($newSchool);
            return $data;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function update(object $school){  # Update School on DataBase

        $updatedData = [];


        if(property_exists($$school, "name"))
            $updatedData["name"] = $$school->name;

        if(property_exists($school, "email"))
            $updatedData["email"] = $school->email;
            
        if(property_exists($school, "password"))
            $updatedData["password"] = $student->password;
        
        
        try {
            $data = $this->db->update($school->id, $updatedData);
            return $data;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
    }

}