<?php
include_once '../models/song.php';
$song = new Add();
 $q=$_REQUEST['q'];
 $q=json_decode($q);
  //var_dump($q) ;
for ($i = 0; $i < count($q); $i++) {
  $aliasT = 'title'  . $i;
  $aliasT = $q[$i]->{$aliasT};
  $aliasAn = 'annee' . $i;
  $aliasAn=$q[$i]->{$aliasAn};
  $aliasL = 'lyrics' . $i;
  $aliasL = $q[$i]->{$aliasL};
  $aliasA = 'artist' . $i;
  $aliasA = $q[$i]->{$aliasA};
  $aliasAl = 'Album' . $i;
  $aliasAl = $q[$i]->{$aliasAl};
  $song->insert($aliasT,$aliasAn,$aliasL,$aliasA,$aliasAl);
}

?>