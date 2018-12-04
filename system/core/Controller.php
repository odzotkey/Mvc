<?php
class Controller {
    protected $load;
    protected $input;
    function __construct(){
        $this->load = new Kernel();
        $this->input = new Form();
    }
}