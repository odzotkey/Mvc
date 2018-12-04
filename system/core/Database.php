<?php
class Database{

    protected $host = HOST;
    protected $user = USER;
    protected $pwd = PASS;
    protected $dbname = DBNAME;
    protected $db_conn;
    protected $sql;

    // function for connection database 
    function __construct(){
        $this->db_conn = new mysqli($this->host, $this->user, $this->pwd, $this->dbname);
    }

//    getting data from database table


    public function get($table, $no = null ,$off = null)
    {
        if(empty($off) && empty($no)){
        $this->sql = $this->db_conn->query("SELECT * FROM $table");
        } else {
             $this->sql = $this->db_conn->query("SELECT * FROM $table LIMIT $no, $off");
        }
        return $this;
    }



    public function get_where($table, $params = []){
        $key = array_keys($params);
        $val = array_values($params);

        $this->sql = $this->db_conn->query("SELECT * FROM $table WHERE $key[0] = '$val[0]' ");
        return $this;
       
    }



    public function result(){
        $data = [];
        while ($table = $this->sql->fetch_object()) {
            $data[] = $table;
        }
        return $data;
    }

    public function num_rows(){
        return $this->sql->num_rows;
    }

    public function row(){
        return $this->sql->fetch_object();
    }

    public function insert($table, $params = []){
        $key = array_keys($params);
        $val = array_values($params);

        $key = implode(",", $key);
        $val = implode("','", $val);

        $sql = $this->db_conn->query("INSERT INTO $table ($key) VALUES ('".$val."')");
        if ($sql) {
            return true;
        } else {
            return $this->db_conn->error;
        }
    }



   



    public function delete($table,  $params = []){
        $key = array_keys($params);
        $val = array_values($params);

        $this->sql = $this->db_conn->query("DELETE FROM $table  WHERE  $key[0] = $val[0] ");
        if ($this->sql) {
            return true;
        } else {
            return $this->db_conn->error;
        }
    }


    














  
}

