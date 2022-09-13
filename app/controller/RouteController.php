<?php 

namespace app\controller;

use app\core\Controller;

use  app\classes\Input;

# Controller que irá gerenciar nossas rotas

class RouteController extends Controller {

    public function __construct() {}

    public function home() {
        $this->load("home/main");
    }

    public function teste(){
       $query =  Input::get('pes'); // Irá pegar o parametro  ?pes da URL

        $this->load("teste/main", [
            "query" => $query
        ]);
    }

   # As demais rotas irão aqui
}