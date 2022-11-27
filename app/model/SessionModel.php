<?php 

namespace app\model;

use app\core\Model;
use app\model\StudentModel;
use Exception;

class SessionModel extends Model {

    private $db;
    private $studentModel;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeQueryBuilder();
        $this->studentModel = new StudentModel();

    }

    public function signIn(object $user) {

        $user = (object)[
            "email" => $user->email,
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
                    $this->studentModel->fetchProgress($idAndPerfil[0]->id);
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