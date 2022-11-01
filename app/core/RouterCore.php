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

        if(strpos($uri, "?"))
            $uri = mb_substr($uri, 0, strpos($uri, "?"));
        
        $ex = explode('/', $uri); # split the string where is the /
        $uri = $this->normalizeURI($ex);

        for($i = 0;  $i < UNSET_URI_COUNT; $i++){
            unset($uri[$i]); # will destroy the char or string or variable
        }

        $this->uri = implode('/', $this->normalizeURI($uri)); # Returns a String by dividing the array elements with slash (/)
        if(DEBUG_URI)
            ownDD($this->uri);
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
                $this->executePost();   
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
                }else{
                    $this->executeController($get['call']);
                }
            }
        }
    }

    private function executePost()
    {
        foreach ($this->getArr as $get) {
            $r = substr($get['router'], 1);
            if (substr($r, -1) == '/') {
                $r = substr($r, 0, -1);
            }
            if ($r == $this->uri) {
                if (is_callable($get['call'])) {
                    $get['call']();
                    return;
                }
                $this->executeController($get['call']);
            }
        }
    }

    private function executeController($get) {
        
        $ex = explode('@', $get);

        if(!isset($ex[0]) || !isset($ex[1])) {
            (new \app\controller\MessageController)->message("Erro 404", "Controller ou método não encontrado: " . $get, 404);
            return;
        }

        $cont = 'app\\controller\\' . $ex[0];

        if(!class_exists($cont)) {
            (new \app\controller\MessageController)->message("Erro 404", "Controller não encontrada: " . $get, 404);
            return;
        }

        if(!method_exists($cont, $ex[1])){
            (new \app\controller\MessageController)->message("Erro 404", "Método não encontrado: " . $get, 404);
            return;
        }

        call_user_func_array([
            new $cont, 
            $ex[1],
        ], []);

        
    }

    private function normalizeURI($arr) {
        return array_values(array_filter($arr)); # return the array filtered (whithout null values)
    }
}