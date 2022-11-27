<?php

namespace app\model;

use app\core\Model;
use Exception;

class ClassModel extends Model{

    private $db;
    private $query;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeDatabase("class", "id");
        $this->query = $connection->initializeQueryBuilder();
    }

    public function fetchBySchool($schoolId){   
        
        $query = [
            'select' => '*',
            'from'   => 'class',
            'where' => 
            [
                'createdBy' => 'eq.' . $schoolId
            ]
        ];
        # Get All Classes from DataBase
        try {
            $result = $this->db->createCustomQuery($query)->getResult();
            $_SESSION['classroom'] = $result;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    
    }

    public function fetchByTeacher($teacherEmail){   
        
        $query = [
            'select' => '*',
            'from'   => 'class',
            'where' => 
            [
                'teacher_email' => 'eq.' . $teacherEmail
            ]
        ];
        # Get All Classes from DataBase
        try {
            $classes = $this->db->createCustomQuery($query)->getResult();
            $_SESSION['classroom'] = $classes;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    
    }

    public function fetchByCode(string $code) {

        $query = [
            'select' => '*',
            'from'   => 'class',
            'where' => 
            [
                'code' => 'eq.' . $code
            ]
        ];

        try {
            
            $result = $this->db->createCustomQuery($query)->getResult();

            if(sizeof($result) === 1){
                $_SESSION['classroom'] = $result[0];
            }

        }catch(Exception $e) {
            return $e->getMessage();
        }

    }

    public function register(object $class){ # Register Class on DataBase

        $newClass = [
            'name'     => $class->name,
            'code'    => $class->code,
            'teacher_email' => $class->teacher_email,
        ];

        if(property_exists($class, 'createdBy')) {
           $newClass['createdBy'] = $class->createdBy;
        }

        try {
            $data = $this->db->insert($newClass);
            return $data;
        }

        catch(Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function update(object $class){  # Update Class on DataBase

        $updatedData = [];

        if(property_exists($class, "name"))
            $updatedData["name"] = $class->name;

        if(property_exists($class, "code"))
            $updatedData["code"] = $class->code;

        if(property_exists($class, "code"))
            $updatedData["teacher_email"] = $class->teacher_email;
        
        try {
            $data = $this->db->update($class->id, $updatedData);
            return $data;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }
}