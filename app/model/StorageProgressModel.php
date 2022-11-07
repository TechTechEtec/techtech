<?php

namespace app\model;

use app\core\Model;
use Exception;

class StorageProgressModel extends Model{

    private $db;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeDatabase("modules_progress", "id");
    }

    public function fetchAll(){   # Get All Schools from DataBase
        try {
            $listOfStudenstProgress = $this->db->fetchAll()->getResult(); 
         
            return $listOfStudenstProgress;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function fetchById(string $id){   # Get All Schools from DataBase
        try {
            $listOfStudentProgress = $this->db->findBy("id", $id)->getResult();
            return $listOfStudentProgress;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function register(object $exam){ # Register School on DataBase
        $accomplishedExam = [
            'id'      => $exam->id,
            'module1_score'    => $exam->module1_score,
            'module2_score'    => $exam->module2_score,
            'module3_score'    => $exam->module3_score,
            'module4_score'    => $exam->module4_score,
            'module5_score'    => $exam->module5_score,
            'module6_score'    => $exam->module6_score,
            'module7_score'    => $exam->module7_score,
            'total_score'      => $exam->total_score
        ];
        
        foreach($accomplishedExam as $data)
        {
            if($data == '')
            {
                unset($data);
            }
        }

        try {
            $data = $this->db->insert($accomplishedExam);
            return $data;
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
        
    }

}