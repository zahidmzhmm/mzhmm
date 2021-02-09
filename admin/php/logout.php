<?php
include "class/Login.php";
if (isset($_GET["logout"])){
    $login = new Login();
    $logout = $login->logout();
    if ($logout){
        header("location:../login");
    }else{
        header("location:../index");
    }
}