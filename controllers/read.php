<?php
include_once '../models/song.php';
$reads = new Add();
$lyrics = $reads->read();
// echo "<pre>";
// print_r($lyrics);
// echo "</pre>";

?>