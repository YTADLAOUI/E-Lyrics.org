<?php 
class Db{
  public function connect(){
    $db = new PDO("mysql:host=localhost;dbname=lyrics","root","");
    $db->exec("set names utf8");
if($db){
  return $db;
}else{
  die("connection faild");
} 
  }
}
?>