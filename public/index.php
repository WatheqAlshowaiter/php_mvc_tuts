<?php

// we should turn on the server 
// by this commmand in the terminal
// php -S localhost:8080
echo "home<br>";

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('VIEW', ROOT . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('MODEL', ROOT . 'app' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR);
define('DATA', ROOT . 'app' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR);
define('CORE', ROOT . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
define('CONTROLLER', ROOT . 'app' . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR);


$modules = [ROOT, APP, CORE, CONTROLLER, DATA];

// var_dump(get_include_path()); echo "<br>";die();
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload', false);

var_dump(get_include_path());
var_dump($_SERVER['REQUEST_URI']);


$app = new Application; 

 
// just for test defined constants 
// echo "<br>Root: " . ROOT;
// echo "<br>App: " . APP;
// echo "<br>view: " . VIEW;
// echo "<br>model: " . MODEL;
// echo "<br>data: " . DATA;
// echo "<br>core: " . CORE;
