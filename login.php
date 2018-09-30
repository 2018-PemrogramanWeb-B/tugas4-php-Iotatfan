<?php
session_start();
$error=$username=$password='';

    if(isset($_POST['name'])){
        $username=$_POST['name'];
        $password=$_POST['key'];
    }

if($_SERVER["REQUEST_METHOD"]=="POST") {
    if($username!='iotatfan' || $password!='magelang') {
        $error='Invalid username or password';
    }
    else {
        $_SESSION['login']=$username;
        header("location: welcome.php");
    }
}
?>