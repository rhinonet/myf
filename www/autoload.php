<?php

spl_autoload_register(function($className) {
    $classMap = require("classes.php");
    if (isset($classMap[$className])) {
        $classFile = $classMap[$className];
    } elseif(preg_match("/[a-zA-Z]+[Controller]/", $className)) {
        $include_path = get_include_path();
        $include_path = $include_path . PATH_SEPARATOR . ROOT_PATH . "/controller/";
        set_include_path($include_path);
        $classFile = $className . ".php";
    } else {
        echo "error" ."file:". __FILE__ . "line:" . __LINE__;
        return;
    }

    include_once($classFile);
});


