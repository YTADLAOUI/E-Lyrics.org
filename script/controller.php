<?php
include_once '../Database/Database.php';
 class Recup extends Db{
   
  public static function add($titre,$annee,$lyrics,$artist,$album){
    $sql="INSERT INTO `song`(`Titre`, `année`, `lyrics`, `nom_artist`, `nom_album`) VALUES ($titre,$annee,$lyrics,$artist,$album)";
    $pre = self::connect()->prepare($sql);
    $pre->execute();
  }
 }

 $q=$_REQUEST['q'];
 $q=json_decode($q);
  //var_dump($q) ;
  for ($i=0; $i < count($q); $i++) {
  $aliasT   = 'title' . $i;
  $aliasAn =  'annee' . $i;
  $aliasL   = 'lyrics'. $i;
  $aliasA   = 'artist'. $i;
  $aliasAl =  'Album' . $i;
  Recup::add($aliasT, $aliasAn, $aliasL, $aliasA, $aliasAl);
}
// var_dump($data);


?>