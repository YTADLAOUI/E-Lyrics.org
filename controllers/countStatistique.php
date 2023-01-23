<?php 
include_once '../models/song.php';
include_once ('../models/admin.php');
$admin= new Admin();
$song= new Add;
$countadmin=$admin->countAdmin();
// print_r($countadmin[0]["email"]);
$countartist = $song->countArtist();
// print_r($countartist[0]["artist"]);
$countAlbum = $song->countAlbum();
// print_r($countAlbum[0]["album"]);
?>