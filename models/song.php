<?php
include_once '../Database/Database.php';
 class Add extends Db{
   
  public  function insert($titre,$annee,$lyrics,$artist,$album){
    $sql = "INSERT INTO `song`(`Titre`, `annee`, `lyrics`, `nom_artist`, `nom_album`) VALUES ('$titre','$annee','$lyrics','$artist','$album');";
    $stmt=$this->connect()->prepare($sql);
    $stmt->execute();
  }
  public function read(){
   $sql= "SELECT `id`, `Titre`, `annee`, `lyrics`, `nom_artist`, `nom_album` FROM `song`";
   $stmt=$this->connect()->prepare($sql);
   $stmt->execute();
   $re=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $re;
  }
  public  function update($id,$titre,$annee,$lyrics,$artist,$album){
    $sql="UPDATE `song` SET `Titre`='$titre',`annee`='$annee',`lyrics`='$lyrics',`nom_artist`='$artist',`nom_album`='$album' WHERE `id`=$id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
  }
  public function delete($id){
    $sql="DELETE FROM `song` WHERE `id`=$id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
  }
  public function edit($id){
    $sql= "SELECT `id`, `Titre`, `annee`, `lyrics`, `nom_artist`, `nom_album` FROM `song` WHERE `id`=$id";
   $stmt=$this->connect()->prepare($sql);
   $stmt->execute();
   $re=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $re;
  }
 }

?>