<?php 

namespace app\model;

use app\core\Model;
use Exception;

class SessionModel extends Model {

    private $db;
    private $progress;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeQueryBuilder();
        $this->progress = $connection->initializeDatabase('modules_progress', 'id');
    }

    public function signIn(object $user) {

        $user = (object)[
            "email" => strtolower($user->email),
            'password' => hash('sha256', $user->password),
        ];

        try{
            $idAndPerfil = $this->db->select("id, perfil")
                ->from("users")
                ->where("email", 'eq.'. $user->email)
                ->where("password", "eq." . $user->password)
                ->execute()
                ->getResult();
                
            
            if(sizeOf($idAndPerfil) === 1) {

                $user = $this->db->select("*")
                    ->from($idAndPerfil[0]->perfil)
                    ->where("id", 'eq.'. $idAndPerfil[0]->id)
                    ->execute()
                    ->getResult();

                $user[0]->perfil = $idAndPerfil[0]->perfil;

                if($idAndPerfil[0]->perfil === "student"){
                    // GET THE PROGRESS OF STUDENT
                    $progress = $this->getProgressModules($idAndPerfil[0]->id)[0];

                    $totalScoreAndActualModule = $this->sumScorePoints((array) $progress);

                    $progressInPorcentage = round($totalScoreAndActualModule->totalScore * 100 / 56);
                    $actualModule = $totalScoreAndActualModule->actualModule;
                    $totalScore = $totalScoreAndActualModule->totalScore;


                    $user[0]->progress =  $progress;
                    $user[0]->progressInPorcentage = $progressInPorcentage;
                    $user[0]->actualModule = $actualModule;
                    $user[0]->totalScore =  $totalScore;

                }

                return $user;
            }
            
            return $idAndPerfil;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }


    public function sumScorePoints(array $scores) {

        $totalScore = 0;
        $actualModule = 1;

        for($i = 1; $i < count($scores) - 2; $i++){
            if(!empty($scores["module" . $i])){
                $totalScore += $scores["module" . $i];
                $actualModule = $i;
            }
        }

        return (object)[
            "totalScore" => $totalScore,
            "actualModule"         => $actualModule 
        ];
    }


    public function getProgressModules(string $id) {

        $query = [
            'select' => 'module1, module2, module3, module4, module5, module6, module7, total, updated_at',
            'from'   => 'modules_progress',
            'where' => 
            [
                'id' => 'eq.' . $id
            ]
        ];

        try {
            
            $progress = $this->progress->createCustomQuery($query)->getResult();

            return $progress;

        }catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function logOut() {
        try{
            session_destroy();
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
}