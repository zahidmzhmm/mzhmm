<?php


class Login
{
    public function admin($data){
        $login_pin = $data["login_pin"];
        $db = new Db();
        $con = $db->con();
        $select = "SELECT * FROM `admin` WHERE pin='$login_pin'";
        $query = mysqli_query($con,$select);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows){
            $admin = mysqli_fetch_array($query);
            $id = $admin["id"];
            $pin = $admin["pin"];
            $name = $admin["name"];
            $secure_pin = $admin["secure_pin"];
            $admindetails = $id."/".$pin."/".$name."/".$secure_pin;
            $explode = explode("/",$admindetails);
            setcookie("admin",$explode[0],time()+3600*72,'/');
            header("location:../index");
        }else {
            $err = "<div class=\"alert text-center alert-danger\">Pin Incorrect</div>";
            header("location:../login");
            return $_SESSION["msg"]=$err;
        }
    }
    public function logout(){
        $setcookie = setcookie("admin",'',time()-3600,'/');
        return $setcookie;
    }
}