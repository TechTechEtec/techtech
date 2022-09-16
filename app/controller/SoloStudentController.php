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
        $this->load("modelteste\main", [
            "resultadodamodel"=>$this->soloStudentModel-> fetch()
        ]);

    }
}