<?php 

namespace app\controller;

use app\core\Controller;

# Controller that manages our routes

class RouteController extends Controller {

    public function __construct() {}

    public function dashboard() {
        $this->load("dashboard/main");
    }

    public function home() {
        $this->load("home/main");
    }

    public function signin() {
        $this->load("signin/main");
    }

    public function chooseSignup() {
        $this->load("choose-signup/main");
    }

    public function signupSchool() {
        $this->load("signup-school/main");
    }
       
    public function signupClass() {
        $this->load("signup-class/main");
    }
    
    public function signupStudent() {
        $this->load("signup-student/main");
    }
    
}