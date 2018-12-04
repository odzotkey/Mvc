<?php

class mymodel extends Model {
   
  
     function getdata(){ 
       return $this->db->get('blogs')->result();
    }

      function getnum(){ 
       return $this->db->get('blogs')->num_rows();
    }
    function where($id){ 
       return $this->db->get_where('blogs', ['id'=>$id])->row();
    }

    function insert($arr){
    	$sql = $this->db->insert("blogs", $arr);
    	return $sql;
    }

    function del($id){
      return $this->db->delete('blogs', ['id'=>$id]);
    }
}


