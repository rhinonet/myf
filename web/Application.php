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
        list($router, $params) = $request->resolve();
        $response = $this->runAction($router, $params);
    }

    public function getRequest() {
        $request = new Request;
        return $request;
    }

    public function runAction($router, $params) {
    
    }

}
