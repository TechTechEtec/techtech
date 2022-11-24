<?php 

namespace app\model;

use app\core\Model;
use app\model\StudentDataHandler;
use Exception;

class SessionModel extends Model {

    private $db;
    private $studentHandler;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeQueryBuilder();
        $this->studentHandler = new StudentDataHandler();

    }

    public function signIn(object $user) {

        $user = (object)[
            "email" => strtolower($user->email),
            'password' => $user->password, # as has
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
                    $progress = $this->studentHandler->fetchProgress($idAndPerfil[0]->id);

                    $user[0]->progress =  $progress;
                    $user[0]->progressInPorcentage = $progress->progressInPorcentage;
                    $user[0]->actualModule = $progress->actualModule;
                    $user[0]->totalScore =  $progress->totalScore;
                }

                return $user;
            }
            
            return $idAndPerfil;
        }
        catch(Exception $e){
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