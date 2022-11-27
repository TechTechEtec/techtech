<?php

namespace app\model;

use app\core\Model;
use Exception;

class SchoolModel extends Model{

    private $db;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeDatabase("school", "id");
    }

    public function fetchAll(){   # Get All Schools from DataBase
        try {
            $listSchools= $this->db->fetchAll()->getResult(); 
         
            return $listSchools;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function fetchById(string $id) {

        $query = [
            'select' => '*',
            'from'   => 'school',
            'where' => 
            [
                'id' => 'eq.' . $id
            ]
        ];

        try {
            
            $result = $this->db->createCustomQuery($query)->getResult();

            if(sizeof($result) === 1){
                $_SESSION['school'] = $result[0];
            }

        }catch(Exception $e) {
            return $e->getMessage();
        }

    }

    public function register(object $school){ # Register School on DataBase
        $newSchool = [
            'name'      => $school->name,
            'email'    => strtolower($school->email),
            'password' => hash('sha256', $school->password),
            "avatar"   => $school->avatar
        ];
        
        try {
            $data = $this->db->insert($newSchool);
            return $data;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function update(object $school){  # Update School on DataBase

        $updatedData = [];


        if(property_exists($school, "name"))
            $updatedData["name"] = $school->name;

        if(property_exists($school, "email"))
            $updatedData["email"] = $school->email;
            
        if(property_exists($school, "password"))
            $updatedData["password"] = hash('sha256', $school->password);
        
        
        try {
            $data = $this->db->update($school->id, $updatedData);
            return $data;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

}