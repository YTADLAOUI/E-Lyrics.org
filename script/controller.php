<?php
include_once '../Database/Database.php';
 class Add extends Db{
   
  public static function add($titre,$annee,$lyrics,$artist,$album){
    $sql="INSERT INTO `song`(`Titre`, `année`, `lyrics`, `nom_artist`, `nom_album`) VALUES ($titre,$annee,$lyrics,$artist,$album)";
    $pre = self::connect()->prepare($sql);
    $pre->execute();
  }
 }


  Add::add($aliasT, $aliasAn, $aliasL, $aliasA, $aliasAl);

// var_dump($data);


?>