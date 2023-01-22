<?php include_once '../models/song.php';

$edits= new Add();
$edit=$edits->edit(42);
print_r($edit) ;
?>