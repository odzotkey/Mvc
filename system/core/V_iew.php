<?php
class V_iew{

    public function view($v){
        if(file_exists('application/views/'.$v.'.php')){
            require_once 'application/views/'.$v.'.php';
        } 
    }
}