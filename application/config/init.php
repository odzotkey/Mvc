<?php
$dir = scandir(__DIR__);

$init_load = array();
for($i = 0; $i<count($dir); $i++){
    $init_load[] =   substr(preg_replace("/[^0-9a-zA-Z]/", "", $dir[$i]),0,-3);

}
for($i = 0; $i<count($init_load); $i++){
    if($init_load[$i] == null){
        unset($init_load[$i]);
    }
}

$init_load = array_values($init_load);
require_once "config.php";
require_once "database.php";
define('BASE_URL', $config['base_url']);
define('DEFAULT_CONTROLLER', $config['routes']);
define('HOST', $db['connection']['host']);
define('USER', $db['connection']['user']);
define('PASS', $db['connection']['password']);
define('DBNAME', $db['connection']['dbname']);

function redirect($url){
	return header('location:'.$url);
}
// define('BASE_URL', $config['base_url']);