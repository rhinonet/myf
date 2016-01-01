<?php
namespace base;

class Controller extends Base implements Viewable {
    public $_view;
    public $_viewPath;
    public $defaultAction = "index";

    public function __construct() {
    
    }

    public function getView() {
        if ($_view == null) {
            $_view = \base\View::Instance();
        }
        return $_view;
    }

    public function setViewPath() {
        $this->_viewPath = "";
    }

    public function render($view, $params) {
        $this->_view->render($this->_viewPath, $view, $params);
    }

    public function __destruct() {
        parent::__destruct();
    }
}
