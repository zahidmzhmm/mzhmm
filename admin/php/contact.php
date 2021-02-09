<?php
session_start();
include "class/Db.php";
require 'phpmailer/PHPMailerAutoload.php';
require 'phpmailer/credential.php';
require "class/Contact.php";
$contact = new Contact();
if (isset($_POST['contact']) && isset($_POST['page'])){
    $data = $_POST;
    $page = $data['page'];
    $nam = $data['name'];
    $eml = $data['email'];
    $sub = $data['subject'];
    $msg = $data['massage'];
    if (empty($nam) | empty($eml) | empty($sub) | $msg){
        $_SESSION['sts']="<div class=\"alert alert-danger\">* Name, Email, Subject, Massage Required</div>";
        header("location:../../$page");
    }else{
        $sendMail = $contact->email_send($nam,$eml,$sub,$msg);
    }
}else{
    header("location:../../index");
}