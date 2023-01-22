<?php include_once '../models/song.php';
if (isset($_GET["idd"])) {delet();}
function delet(){
 $id=$_GET["idd"];
 $delete=new Add();
 $delete->delete($id);
 header('Location: http://localhost/admin/E-Lyrics.org/view/lyrics.php');
}

?>