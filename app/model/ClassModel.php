<?php

namespace app\model;

use app\Core\Model;
use Exception;

class ClassModel extends Model{

    private $db;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeDatabase("cad_class", "id");
    }

    public function fetchAll(){   # Get All Classes from DataBase
        try {
            $listClasses = $this->db->fetchAll()->getResult(); 
            return $listClasses;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
    
    }

    public function fetchById(string $id){   # Get All Classes from DataBase
        try {
            $class= $this->db->findBy("id", $id)->getResult();
            return $class;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function register(object $class){ # Register Class on DataBase
        $newClass = [
            'name'     => $class->name,
            'code'    => $class->code,
            'teacher_email' => $class->teacher_email
        ];
        
        try {
            $data = $this->db->insert($newClass);
            return $data;
        }
        catch(Exception $e) {

            return 0;
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
            echo $e->getMessage();
        }
    }
}