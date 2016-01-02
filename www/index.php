<?php
define("ROOT_PATH", dirname(__DIR__));
require(__DIR__ . "/config.php");
require(__DIR__ . "/autoload.php");
$application = new web\Application();
$application->run();
