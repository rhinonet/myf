<?php
namespace web;

class UrlManage extends \base\Base {
    public $ruleConfig = array('class' => 'web\UrlRule');
    
    public function __construct() {
        parent::__construct();
    }
    
    public function parseRequest($request) {
        $rule = new UrlRule;
        $result = $rule->parseRequest($this, $request);
        if ($result !== false) {
            return $result;
        } else {
            exit("error:" . __FILE__ . __LINE__);
        } 
    } 

    public function createUrl() {
    
    }
}
