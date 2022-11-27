<?php

namespace app\model;

use app\core\Model;
use Exception;

class StudentModel extends Model{

    private $db;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeDatabase("student", "id");
    }

    public function register(object $student){ # Register Student on DataBase
        $newStudent = [
            'name'      => $student->name,
            'email'    => strtolower($student->email),
            'birthday' => $student->birthday,
            'password' => hash('sha256', $student->password),
            "avatar"   => $student->avatar
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
            
        if(property_exists($student, "new_password"))
            $updatedData["password"] = hash('sha256', $student->new_password);
    
        if(property_exists($student, "bio"))
            $updatedData["bio"] = $student->bio;

        if(property_exists($student, "classcode"))
            $updatedData["classcode"] = $student->classcode;
        
        try {
            // Case to change the password
            if(property_exists($student, "old_password")){

                $old_password = hash('sha256', $student->old_password);

                $existRegister = $this->db->findBy("password", $old_password)->getResult();

                if(is_array($existRegister) && sizeof($existRegister) === 1){
                    $data = $this->db->update($_SESSION['extra']->id, $updatedData);
                    return $data;
                }

                return 0;
            }

            // Update everything without password
            $data = $this->db->update($_SESSION['extra']->id, $updatedData);
            return $data;
                      
        }
        
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function fetchProgress(string $id) {

        $query = [
            'select' => 'scores, modules',
            'from'   => 'student',
            'where' => 
            [
                'id' => 'eq.' . $id
            ]
        ];

        try {
            
            $progress = $this->db->createCustomQuery($query)->getResult();

            if(sizeof($progress) === 1){
                $actualModule =  $this->actualModule((array) $progress[0]->modules);

                $_SESSION["scores"] = $progress[0]->scores;
                $_SESSION['modules'] = $progress[0]->modules;
                $_SESSION['actualModule'] = $actualModule;  
            }

        }catch(Exception $e) {
            return $e->getMessage();
        }

    }

    public function fetchClassMates(string $code) {

        $query = [
            'select' => '*',
            'from'   => 'student',
            'where' => 
            [
                'classcode' => 'eq.' . $code,
            ]
        ];

        try {
            $classmates = $this->db->createCustomQuery($query)->getResult();
            $_SESSION['classmates'] = $classmates;

        }catch(Exception $e) {
            return $e->getMessage();
        }

    }

    public function actualModule(array $scores) {

        $actualModule = 1;

        for($i = 1; $i < sizeof($scores); $i++){
            if($scores[$i] !== 0){
                $actualModule = $i + 2;
            }
        }

        return  $actualModule;
    }

}