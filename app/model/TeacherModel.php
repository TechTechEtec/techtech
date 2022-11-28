<?php

namespace app\model;

use app\core\Model;
use Exception;

class TeacherModel extends Model{

    private $db;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeDatabase("teacher", "id");
    }

    public function fetchBySchool($schoolName) {

        $query = [
            'select' => '*',
            'from'   => 'teacher',
            'where' => [
                "schoolName" => 'eq.' . $schoolName
            ]
        ];

        try {
        
            $result = $this->db->createCustomQuery($query)->getResult();
            $_SESSION['teacher'] = $result; 

        }catch(Exception $e) {
            return $e->getMessage();
        }

    }

    public function fetchByEmail(string $email) {

        $query = [
            'select' => '*',
            'from'   => 'teacher',
            'where' => 
            [
                'email' => 'eq.' . $email
            ]
        ];

        try {
            
            $result = $this->db->createCustomQuery($query)->getResult();

            if(sizeof($result) === 1){
                $_SESSION['teacher'] = $result[0];
            }

        }catch(Exception $e) {
            return $e->getMessage();
        }

    }

    public function register(object $teacher){ # Register Teacher on DataBase
        $newTeacher = [
            'schoolName'=> $teacher->schoolName,
            'name'     => $teacher->name,
            'email'    => strtolower($teacher->email),
            'password' => hash("sha256", $teacher->password),
            "avatar"   => $teacher->avatar
        ];
        
        try {
            $data = $this->db->insert($newTeacher);
            return $data;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function update(object $teacher){  # Update Student on DataBase

        $updatedData = [];

        if(property_exists($teacher, "name"))
            $updatedData["name"] = $teacher->name;

        if(property_exists($teacher, "email"))
            $updatedData["email"] = $teacher->email;
            
        if(property_exists($teacher, "new_password"))
            $updatedData["password"] = hash('sha256', $teacher->new_password);
    
        if(property_exists($teacher, "bio"))
            $updatedData["bio"] = $teacher->bio;
        
        try {
            // Case to change the password
            if(property_exists($teacher, "old_password")){

                $old_password = hash('sha256', $teacher->old_password);

                $query = [
                    'select' => '*',
                    'from'   => 'teacher',
                    "where"   => [
                        "email" => "eq." . $_SESSION['email'],
                        "password" => "eq." . $old_password
                    ]
                ];

                $existRegister = $this->db->createCustomQuery($query)->getResult();

                if(is_array($existRegister) && sizeof($existRegister) === 1){
                    $data = $this->db->update($_SESSION['extra']->id, $updatedData);
                 
                    return $data;
                }

                return "Registro correspondente não foi encontrado.";
            }

            // Update everything without password
            $data = $this->db->update($_SESSION['extra']->id, $updatedData);
            return $data;
                      
        }
        
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

}

 # ADD LATER INFOS FROM SUPABASE 
 # id_school
 # id_class