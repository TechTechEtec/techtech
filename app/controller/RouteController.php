<?php 

namespace app\controller;

use app\core\Controller;

# Controller que irá gerenciar nossas rotas

class RouteController extends Controller {
    public function index() {
        $this->load("home/main");
    }
}