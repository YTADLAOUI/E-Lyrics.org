<?php
include_once '../Database/Database.php';
class Admin extends Db{
    function select(){
        $sql="SELECT `id`, `nom`, `email`, `psw` FROM `admin`";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute();
        $re=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $re;
     }
}


?>