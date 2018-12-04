<?php


class cart extends Controller {



    function __construct(){
        parent:: __construct();
         $this->load->model('mymodel', 'model');
       
    }




    public function index(){
        $data['sql'] = $this->load->model->getdata();
       $this->load->view('layouts/header');
       $this->load->view('pages/index',$data);
       $this->load->view('layouts/header');
    }

     public function edit($id){
        $data['sql'] = $this->load->model->where($id);
       $this->load->view('layouts/header');
       $this->load->view('pages/edit',$data);
       $this->load->view('layouts/header');
    }

    public function add(){
        $this->load->view('layouts/header');
       $this->load->view('pages/add');
       $this->load->view('layouts/header');
    }

    public function insert(){
        $arr = [
            'title'=>$this->input->post('title'),
            'body'=>$this->input->post('body')
        ];

      $sql =  $this->load->model->insert($arr);
      if ($sql) {
          redirect(BASE_URL.'cart');
      }
    }

    public function update(){
        $this->input->post('title');
    }

    public function delete($id){
        echo $this->load->model->del($id);
         redirect(BASE_URL.'cart');
    }





    
}