<?php 
namespace base;

class View extends Base {
    
    public $ext = ".php";

    public function __construct() {
        parent::__construct();        
    }

    public function render($view, $params) {
        $viewFile = $this->findViewFile($view);
        if ($viewFile !== null) {
            return $this->renderFile($viewFile, $params);
        }
    }

    public function findViewFile($view) {
        $path = $this->getViewPath() . $view . $this->ext;
        if (is_file($path)) {
            return $path;
        } else {
            echo "view isn't exists" . __FILE__ . __LINE__ . "\n";
        }
    }

    public function renderFile($viewFile, $params) {
        $ext = pathinfo($viewFile, PATHINFO_EXTENSION);
        if ($ext == "php") {
            $output = $this->renderPhpFile($viewFile, $params);
            echo $output;exit;
        }
    }

    public function renderPhpFile($_file_, $_params_) {
        ob_start();
        ob_implicit_flush(false);
        extract($_params_, EXTR_OVERWRITE);
        require($_file_);

        return ob_get_clean();   
    }

    public function getViewPath() {
        return ROOT_PATH . '/view/' ;
    }

    public function __destruct() {
        parent::__destruct();
    }
}
