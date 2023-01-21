<?php
include_once ('../models/admin.php');
session_start();
if( isset($_POST["signIn"])){con();} 
if(isset($_GET["log"])){logout();}
function con(){
    $log=new Admin();
    $user=$log->select();
    //var_dump($user[0]);
    $email=$_POST["email"];
    //echo $email;
    $psw=$_POST["psw"];
    //echo $psw;
    if($email==$user[0]["email"] && $psw==$user[0]["psw"]){
        $_SESSION['name']=$user[0]["nom"];
        header('Location: http://localhost/admin/E-Lyrics.org/page/accuile.php');
    }else{
        header('Location: http://localhost/admin/E-Lyrics.org/page?message/');
        $_SESSION['message'] = "s'il vous plait check votre information!";
    }
}
function logout(){
    unset($_SESSION['name']);
    header('Location: http://localhost/admin/E-Lyrics.org/page/');
}
?>