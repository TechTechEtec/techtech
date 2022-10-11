<?php

namespace app\model;

use app\Core\Model;
use Exception;

class StudentModel extends Model{

    private $db;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeDatabase("cad_student", "id");
    }

    public function fetchAll(){   # Get All Students from DataBase
        try {
            $listStudents = $this->db->fetchAll()->getResult(); 
            return $listStudents;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    
    }

    public function fetchById(string $id){   # Get All Students from DataBase
        try {
            $student = $this->db->findBy("id", $id)->getResult();
            return $student;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function register(object $student){ # Register Student on DataBase
        $newStudent = [
            'name'      => $student->name,
            'email'    => $student->email,
            'birthday' => $student->birthday,
            'password' => hash('sha256', $student->password),
        ];

        try {
            $data = $this->db->insert($newStudent);
            return $data;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function update(object $student){  # Update Student on DataBase

        $updatedData = [];

        if(property_exists($student, "name"))
            $updatedData["name"] = $student->name;

        if(property_exists($student, "email"))
            $updatedData["email"] = $student->email;
            
        if(property_exists($student, "password"))
            $updatedData["password"] = hash('sha256', $student->password);
    
        if(property_exists($student, "birthday"))
            $updatedData["birthday"] = $student->birthday;
        
        
        try {
            $data = $this->db->update($student->id, $updatedData);
            return $data;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }
}