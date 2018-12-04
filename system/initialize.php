<?php
require_once "application/config/init.php";
spl_autoload_register(function($class){
    require_once "core/".$class.".php";
});

for($i = 0; $i<count($init_load); $i++){
    if($init_load[$i] != 'init'){
        require_once "application/config/".$init_load[$i].".php";
        
    }
}




