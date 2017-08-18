<?php




interface Model{


public function createTable();

public function insertData($data);

public function deleteData($id);

public function updateData($id,$data);

public function selectById($id);

public function selectAll();
}
?>