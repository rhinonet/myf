<?php
namespace base;

class Base {
    
    public function __construct() {
        $this->init();
    }

    public function init() {
    
    }

    public function __get($name) {
    
    }

    public function __set($name, $value) {
    
    }

    public function __isset($name) {
    
    }

    public function __unset($name) {
    
    }

    public function __call($name, $params) {
        echo "name:" . $name . "\n";    
    }

    public function __clone() {
    
    }

    public function __destruct() {
    
    }
}
