<?php
class App {
    protected $controller = DEFAULT_CONTROLLER;
    protected $method = 'index';
    protected $params = [];
    function __construct(){
        $url = $this->p_url();
         if(file_exists('application/controllers/'.$url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
           
         } else {
            echo "";
         }
          require_once "application/controllers/".$this->controller.".php";
         $this->controller = new $this->controller();
         if(isset($url[1])){
             if(method_exists($this->controller, $url[1])){
                 $this->method = $url[1];
               unset($url[1]);
             }
         }

         if(!empty($url)){
             $this->params = array_values($url);
         }
         call_user_func_array([$this->controller, $this->method], $this->params);
         
    } 

    function p_url(){
         $url = parse_url($_GET['url']);
         $url = $url['path'];
         $utl = rtrim($url, '/');
         $url = rtrim($url, '/');
         $url = filter_var($url, FILTER_SANITIZE_URL);
         $url = explode('/', $url);
         return $url;
     }

    
}
