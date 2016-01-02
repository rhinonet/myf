<?php
namespace web;

class Application extends \base\Base {
    public $defaultController;

    public function __construct() {
    
    }
    public function run() {
        $response = $this->handleRequest($this->getRequest());
    }

    public function handleRequest($request) {
        $router = $request->resolve();
        $response = $this->runAction($router);
    }

    public function getRequest() {
        $request = new Request;
        return $request;
    }

    public function runAction($router) {
        $router = array ( 'router' => array ( 'c' => 'default', 'a' => 'index', ), 'params' => array ( ), );
        $c = $router['router']['c'] . "Controller";
        $a = $router['router']['a'] . "Action";
        $p = $router['params'];
        try {
            $controller = new $c;
            $controller->$a($p);
        } catch (Exception $e) {
        
        }
    }

}
