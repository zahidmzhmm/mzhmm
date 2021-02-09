<?php


class Insert
{
    public function insertdata($con,$data){
        $query = mysqli_query($con,$data);
        if ($query){
            $msg = "<div class=\"alert text-center alert-success\">Success</div>";
            $_SESSION["msg"]=$msg;
            header("location:../login");
        }else{
            $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
            $_SESSION["msg"]=$msg;
            header("location:../register");
        }
    }
    public function insertskill($skill){
        $db = new Db();
        $con = $db->con();
        $query = mysqli_query($con,$skill);
        return $query;
    }
}