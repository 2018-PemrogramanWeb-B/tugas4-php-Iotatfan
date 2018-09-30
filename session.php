<?php
session_start();
if(isset($_SESSION['login'])) {
    $user_login=$_SESSION['login'];
}

?>