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

    # STUDENTS
    public function fetchProgress(string $id) {

        $query = [
            'select' => 'module1, module2, module3, module4, module5, module6, module7, total, updated_at',
            'from'   => 'modules_progress',
            'where' => 
            [
                'id' => 'eq.' . $id
            ]
        ];

        try {
            
            $progress = $this->query->createCustomQuery($query)->getResult();


            if(sizeof($progress) === 1){
                $totalScoreAndActualModule =  $this->sumScore((array) $progress[0]);

        
                $progressInPorcentage = round($totalScoreAndActualModule->totalScore * 100 / 560);
                $actualModule = $totalScoreAndActualModule->actualModule;
                $totalScore = $totalScoreAndActualModule->totalScore;


                return (object)[
                    "progress"                  =>   $progress[0],
                    "progressInPorcentage"      => $progressInPorcentage,
                    "actualModule"              => $actualModule,
                    "totalScore"                => $totalScore
                ];
            }

        }catch(Exception $e) {
            return $e->getMessage();
        }

    }


    public function sumScore(array $scores) {

        $totalScore = 0;
        $actualModule = 1;



        for($i = 1; $i < count($scores) - 1; $i++){

            console_log("module" . $i);

            if(!empty($scores["module" . $i])){
                $totalScore += $scores["module" . $i];
                $actualModule = $i + 1;
            }
        }

        return (object)[
            "totalScore" => $totalScore,
            "actualModule"         => $actualModule 
        ];
    }

}