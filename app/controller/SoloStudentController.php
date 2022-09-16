<?php

namespace app\controller;

use app\model\SoloStudentModel;
use app\core\Controller;

class SoloStudentController extends Controller {
    private $soloStudentModel;

    public function __construct(){ 
        $this->soloStudentModel = new SoloStudentModel();

    }

    public function fetch() {

         $db_response = $this->soloStudentModel->fetch();

        console_log($db_response);

        $this->load("modelteste\main");

    }
}