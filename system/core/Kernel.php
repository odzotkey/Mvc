<?php
class Kernel{

    public function view($v, $data = []){
        if(file_exists('application/views/'.$v.'.php')){
            require_once 'application/views/'.$v.'.php';
        } 
    }

    public function model($name, $alias){
        if(file_exists('application/models/'.$name.'.php')){
            require_once"application/models/".$name.".php";
            if(class_exists($name)){
                $this->{$alias} = new $name();
            } else {
                echo "Class name must be same with filename";
            }
        } else {
            echo "File $name was not found";
        }
    }

}