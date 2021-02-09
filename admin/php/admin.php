<?php
session_start();
include "class/Db.php";
include "class/Register.php";
include "class/Login.php";
include "class/Insert.php";
$register = new Register();
$loginnow = new Login();
if (isset($_REQUEST["register"])) {
    $registrationdata = $_POST;
    $registration = $register->admin($registrationdata);
}elseif (isset($_REQUEST["login"])){
    $logindata = $_POST;
    $login = $loginnow->admin($logindata);
}else{
    header("location:../register");
}
?>