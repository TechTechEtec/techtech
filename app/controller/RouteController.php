<?php 

namespace app\controller;

use app\core\Controller;

# Controller que irá gerenciar nossas rotas

class RouteController extends Controller {

    public function __construct() {}

    public function home() {
        $this->load("home/main");
    }

   # As demais rotas irão aqui
}