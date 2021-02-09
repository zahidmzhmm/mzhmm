<?php


class Db
{
    public function con()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "zahid";
        $con = mysqli_connect($host,$user,$pass,$db);;
        return $con;
    }
}