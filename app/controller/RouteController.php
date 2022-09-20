<?php 

namespace app\controller;

use app\core\Controller;

# Controller that manage our routes

class RouteController extends Controller {

    public function __construct() {}

    public function home() {
        $this->load("home/main");
    }
    
    public function signupSchool() {
        $this->load("school/main");
    }
       
    public function createClass() {
        $this->load("create-class/main");
    }
    
    public function signupStudent() {
        $this->load("student/main");
    }
    
    public function signupClass() {
        $this->load("class/main");
    }

    public function chooseSignup() {
        $this->load("choose-signup/main");
    }

   # Routes will be here.
}