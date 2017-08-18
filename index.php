<?php
require_once $_SERVER['DOCUMENT_ROOT'].'hng/core/autoload.php';

$data = ["name"=>"Nwanze Franklin", "email"=>"frank4don@gmail.com", "password" => "secret"];
$user = new User("users");
$user->createTable();
$user->insertData($data);
var_dump($user->selectAll());
?>