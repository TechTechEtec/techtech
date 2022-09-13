<?php 

namespace app\core;

class RouterCore {

    private $uri;
    private $method;

    private $getArr = [];

    public function __construct() {
        $this->initialize();
        require_once('../app/config/router.php');
        $this->execute();
    }

    private function initialize() {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        
        // 1° way to replace dd(str_replace('/techtech', '', $uri));
        
        // 2° way:
        $ex = explode('/', $uri); # split the string where is the /
        $uri = $this->normalizeURI($ex);

        for($i = 0;  $i < UNSET_URI_COUNT; $i++){
            unset($uri[$i]); # will destroy the char or string or variable
        }

        $this->uri = implode('/', $this->normalizeURI($uri)); # Returns a String by dividing the array elements with slash (/)
        if(DEBUG_URI)
            dd($this->uri);
    }

    private function get($router, $call) {
        $this->getArr[] = [
            'router' => $router,
            'call' => $call
        ];
    }

    private function execute(){
        switch($this->method){
            case 'GET':
                $this->executeGet();        
            break;
            case 'POST':
                
            break;
        }
    }

    private function executeGet() {
        foreach($this->getArr as $get){
            $r = substr($get['router'], 1);

            if(substr($r, -1) == '/') {
                $r = substr($r, 0, -1);
            }

            if($r == $this->uri) {
                if(is_callable($get['call'])){
                    $get['call']();
                    break;
                }
            }
        }
    }

    private function normalizeURI($arr) {
        return array_values(array_filter($arr)); # return the array filtered (whithout null values)
    }
}