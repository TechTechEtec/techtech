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

    public function fetchAll(){   # Get All Classes from DataBase
        try {
            $listClasses = $this->query->select("*")->from('class')->where("createdBy", "eq." . $_SESSION['extra']->id)->execute()->getResult();
            return $listClasses;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    
    }

    public function fetchById(string $id){   # Get All Classes from DataBase
        try {
            $class= $this->db->findBy("id", $id)->getResult();
            return $class;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function register(object $class){ # Register Class on DataBase
        $newClass = [
            'name'     => $class->name,
            'code'    => $class->code,
            'teacher_email' => $class->teacher_email,
            'createdBy' => $_SESSION['extra']->id 
        ];
        
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