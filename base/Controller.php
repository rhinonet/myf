<?php
namespace base;

class Controller extends Base implements Viewable {
    public $_view;
    public $_viewPath;
    public $defaultAction = "index";

    public function __construct() {
        parent::__construct();    
    }

    public function getView() {
        $_view = new View;
        return $_view;
    }

    public function render($view, $params) {
        $content = $this->getView()->render($view, $params);
        return $content;
    }

    public function setViewPath() {
    
    }

    public function __destruct() {
        parent::__destruct();
    }
}
