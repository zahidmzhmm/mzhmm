<?php


class Register
{
    public function admin($post){
        $name = $post["name"];
        $secure_pin = $post["secure_pin"];
        $pin = $post["pin"];
        if (empty($name) | empty($secure_pin) | empty($pin)){
            $err = "<div class=\"alert text-center alert-danger\">Name, Secure Pin & Pin Required</div>";
            header("location:../register");
            return $_SESSION["msg"]=$err;
        }else{
            $strlen = strlen($name);
            $strlenspin = strlen($secure_pin);
            $strlenpin = strlen($pin);
            if($strlen>4 && $strlenspin>4 && $strlenpin>4){
                $db = new Db();
                $con = $db->con();
                echo $secure_pin;
                $select_query = "SELECT * FROM `admin` WHERE secure_pin='$secure_pin'";
                $query = mysqli_query($con,$select_query);
                $num_rows = mysqli_num_rows($query);
                if ($num_rows>0){
                    $data = "INSERT INTO `admin`(`pin`, `name`, `secure_pin`) VALUES ('$pin','$name','$secure_pin')";
                    $insert = new Insert();
                    $insert_query = $insert->insertdata($con,$data);
                    return $insert_query;
                }else{
                    $err = "<div class=\"alert text-center alert-danger\">Secure Pin Incorrect</div>";
                    header("location:../register");
                    return $_SESSION["msg"]=$err;
                }
            }else{
                $err = "<div class=\"alert text-center alert-danger\">Name, Secure Pin & Pin need 4 character</div>";
                header("location:../register");
                return $_SESSION["msg"]=$err;
            }
        }
    }
}