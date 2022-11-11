<?php 

namespace app\model;

use app\core\Model;
use Exception;

class SessionModel extends Model {

    private $db;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeQueryBuilder();
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