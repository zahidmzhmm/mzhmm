<?php


class Db
{
    public function con()
    {
        $host = "localhost";
        $user = "mzhmm_admin";
        $pass = "m-zhm118899S";
        $db = "mzhmm_admin";
        $con = mysqli_connect($host,$user,$pass,$db);;
        return $con;
    }
}