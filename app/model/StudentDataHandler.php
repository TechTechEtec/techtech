<?php 

namespace app\model;

use app\core\Model;
use Exception;

class StudentDataHandler extends Model {

    private $query;

    public function __construct(){

        $connection = $this->connect();

        $this->query = $connection->initializeDatabase("student", "id");
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
            
            $progress = $this->query->createCustomQuery($query)->getResult();

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

    public function fetchClassRoom(string $code) {

        $query = [
            'select' => '*',
            'from'   => 'class',
            'where' => 
            [
                'code' => 'eq.' . $code
            ]
        ];

        try {
            
            $result = $this->query->createCustomQuery($query)->getResult();

            if(sizeof($result) === 1){
                $_SESSION['classroom'] = $result[0];
            }

        }catch(Exception $e) {
            return $e->getMessage();
        }

    }

    public function fetchSchool(string $id) {

        $query = [
            'select' => '*',
            'from'   => 'school',
            'where' => 
            [
                'id' => 'eq.' . $id
            ]
        ];

        try {
            
            $result = $this->query->createCustomQuery($query)->getResult();

            if(sizeof($result) === 1){
                $_SESSION['school'] = $result[0];
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
                "id" => 'neq.' . $_SESSION['extra']->id
            ]
        ];

        try {
            $classmates = $this->query->createCustomQuery($query)->getResult();
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