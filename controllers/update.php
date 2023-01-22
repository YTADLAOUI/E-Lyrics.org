<?php
include_once "../models/song.php";
if(isset($_REQUEST["t"])){
    $upd=$_REQUEST["t"];
    $upd=json_decode( $upd);
     $ph=new Add();
    $ph->update($upd[0],$upd[1],$upd[4],$upd[5],$upd[2],$upd[3]);
}




?>