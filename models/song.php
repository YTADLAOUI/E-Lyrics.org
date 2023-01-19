<?php
include_once '../Database/Database.php';
 class Add extends Db{
   
  public  function insert($titre,$annee,$lyrics,$artist,$album){
    $sql = "INSERT INTO `song`(`Titre`, `annee`, `lyrics`, `nom_artist`, `nom_album`) VALUES ('".$titre."','".$annee."','".$lyrics."','".$artist."','". $album."');";
    // echo $sql;
    // die;
    $stmt=$this->connect()->prepare($sql);
    $stmt->execute();
  }
  public static function update(){
    $sql="UPDATE `song` SET `id`='[value-1]',`Titre`='[value-2]',`année`='[value-3]',`lyrics`='[value-4]',`nom_artist`='[value-5]',`nom_album`='[value-6]'";
    $stmt = self::connect()->prepare($sql);
    $stmt->execute();
  }
 }
?>