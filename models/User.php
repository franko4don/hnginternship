<?php
require_once $_SERVER['DOCUMENT_ROOT'].'hng/core/autoload.php';

class User implements Model{

    public $sql;
    public $table;
    public function __construct($table){
        $sql = new mysqli("localhost","root","","hng");
        $this->sql = $sql;
        $this->table = $table;
    }

    public function createTable(){
        $query = "create table if not exists $this->table(id int auto_increment primary key, name varchar(20), 
                    email varchar(50) unique, password varchar(200), created_at datetime, updated_at datetime)";
        return $this->sql->query($query);
    }

    public function insertData($data){
        $column_build = "";
        $data_build = "";
        foreach($data as $key => $value){
            $column_build .= "$key , ";
            $data_build .= "'$value' , ";
        }

        $query = "insert into $this->table (id, $column_build created_at, updated_at) values(
        null,$data_build now(), now()
        )";
        return $this->sql->query($query);
    }

    public function deleteData($id){
        $query = "delete from $this->table where id = $id";
        return $this->sql->query($query);
    }

    public function updateData($id, $data){

    }

    public function selectAll(){
        $query = "select * from $this->table";
        return $this->sql->query($query);
    }

    public function selectById($id){
    }

}
?>