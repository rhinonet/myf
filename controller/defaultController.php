<?php 

class defaultController extends BaseController {
    public function indexAction($params) {
        $this->render('default/index', array('class'=> __class__, 'method' => __method__));
    }
}
