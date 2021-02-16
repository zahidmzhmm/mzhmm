<?php
session_start();
include "class/Db.php";
include "class/Edit.php";
$edit = new Edit();
if (isset($_REQUEST["edit_profile"])){
    $data = $_POST;
    $id = $data["id"];
    $name = $data["name"];
    $title = $data["title"];
    $email = $data["email"];
    $addrs = $data["addrs"];
    $interest = $data["interest"];
    $website = $data["website"];
    $birth = $data["birth"];
    $phone = $data["phone"];
    $linkedin = $data["linkedin"];
    $youtube = $data["youtube"];
    $behance = $data["behance"];
    $facebook = $data["facebook"];
    $twitter = $data["twitter"];
    $skype = $data["skype"];
    $freelance_acc = $data["freelance"];
    $resume = $data["resume"];
    $old_file = '../uploads/'.$data["old_file"];
    $file = $_FILES["edit_file"];
    $filename = $file["name"];
    $rand = rand(9,999);
    $strlen_file = strlen($filename);
    if ($strlen_file>0){
        $profile_file_name = $rand.str_replace(' ','',strtolower($filename));
        $filename = $file["tmp_name"];
        $dir = '../uploads/'.$profile_file_name;
        unlink($old_file);
        $upload = move_uploaded_file($filename,$dir);
        if ($upload){
            $data = "UPDATE `admin` SET
                            `img`='$profile_file_name',`name`='$name',`title`='$title',`email`='$email',`addrs`='$addrs',`interest`='$interest',`website`='$website',`birth`='$birth',`phone`='$phone',`facebook`='$facebook',`twitter`='$twitter',`linkedin`='$linkedin',`youtube`='$youtube',`behance`='$behance', `skype`='$skype',`resume`='$resume' WHERE id='$id'";
            $update_profile = $edit->update($data);
            if ($update_profile){
                $msg = "<div class=\"alert text-center alert-success\">Success</div>";
                $_SESSION["msg"]=$msg;
                header("location:../profile");
            }else{
                $msg = "<div class=\"alert text-center alert-danger\">Error Please Try Again</div>";
                $_SESSION["msg"]=$msg;
                header("location:../profile");
            }
        }
    }else{
        $data = "UPDATE `admin` SET
                                `name`='$name',`title`='$title',`email`='$email',`addrs`='$addrs',`interest`='$interest',`website`='$website',`birth`='$birth',`phone`='$phone',`facebook`='$facebook',`twitter`='$twitter',`linkedin`='$linkedin',`youtube`='$youtube',`behance`='$behance',`skype`='$skype',`resume`='$resume' WHERE id='$id'";
        $update_profile = $edit->update($data);
        if ($update_profile){
            $msg = "<div class=\"alert text-center alert-success\">Success</div>";
            $_SESSION["msg"]=$msg;
            header("location:../profile");
        }else{
            $msg = "<div class=\"alert text-center alert-danger\">Error Please Try Again</div>";
            $_SESSION["msg"]=$msg;
            header("location:../profile");
        }
    }
}elseif(isset($_REQUEST["edit_about"])){
    $about = $_POST;
    $id = $about["id"];
    $description_about = $about["description"];
    $short_description = $about["short_description"];
    $data = "UPDATE `admin` SET `description`='$description_about',`short_description`='$short_description' WHERE id='$id'";
    $update_profile = $edit->update($data);
    if ($update_profile){
        $msg = "<div class=\"alert text-center alert-success\">Success</div>";
        $_SESSION["msg"]=$msg;
        header("location:../about");
    }else{
        $msg = "<div class=\"alert text-center alert-danger\">Error Please Try Again</div>";
        $_SESSION["msg"]=$msg;
        header("location:../about");
    }
}elseif(isset($_REQUEST["upload_main_image"])){
    $data = $_POST;
    $id = $data["main_profile_image_id"];
    $old_file = '../uploads/'.$data["old_file"];
    $file = $_FILES["main_file"];
    $filename = $file["name"];
    $rand = rand(9,999);
    $strlen_file = strlen($filename);
    if ($strlen_file>0){
        $main_profile_image = $rand.str_replace(' ','',strtolower($filename));
        $filename = $file["tmp_name"];
        $dir = '../uploads/'.$main_profile_image;
//        unlink($old_file);
        $upload = move_uploaded_file($filename,$dir);
        if ($upload){
            $data = "UPDATE `admin` SET `main_image`='$main_profile_image' WHERE id='$id'";
            $update_profile = $edit->update($data);
            if ($update_profile){
                $msg = "<div class=\"alert text-center alert-success\">Success</div>";
                $_SESSION["msg"]=$msg;
                header("location:../image");
            }else{
                $msg = "<div class=\"alert text-center alert-danger\">Error Please Try Again</div>";
                $_SESSION["msg"]=$msg;
                header("location:../image");
            }
        }
    }
}elseif(isset($_REQUEST["upload_logo"])) {
    $data = $_POST;
    $id = $data["admin_id_no"];
    $old_file = '../uploads/'.$data["old_file"];
    $file = $_FILES["main_file"];
    $filename = $file["name"];
    $rand = rand(9,999);
    $strlen_file = strlen($filename);
    if ($strlen_file>0){
        $logo = $rand.str_replace(' ','',strtolower($filename));
        $filetmp = $file["tmp_name"];
        $dir = '../uploads/'.$logo;
        $upload = move_uploaded_file($filetmp,$dir);
        if ($upload){
            $data = "UPDATE `admin` SET `logo`='$logo' WHERE id='$id'";
            $update_profile = $edit->update($data);
            if ($update_profile){
                $msg = "<div class=\"alert text-center alert-success\">Success</div>";
                $_SESSION["msg"]=$msg;
                header("location:../image");
            }else{
                $msg = "<div class=\"alert text-center alert-danger\">Error Please Try Again</div>";
                $_SESSION["msg"]=$msg;
                header("location:../image");
            }
        }
    }
}elseif(isset($_REQUEST["upload_favicon"])) {
    $data = $_POST;
    $id = $data["admin_id_no"];
    $old_file = '../uploads/'.$data["old_file"];
    $file = $_FILES["main_file"];
    $filename = $file["name"];
    $rand = rand(9,999);
    $strlen_file = strlen($filename);
    if ($strlen_file>0){
        $favicon = $rand.str_replace(' ','',strtolower($filename));
        $filetmp = $file["tmp_name"];
        $dir = '../uploads/'.$favicon;
        $upload = move_uploaded_file($filetmp,$dir);
        if ($upload){
            $data = "UPDATE `admin` SET `favicon`='$favicon' WHERE id='$id'";
            $update_profile = $edit->update($data);
            if ($update_profile){
                $msg = "<div class=\"alert text-center alert-success\">Success</div>";
                $_SESSION["msg"]=$msg;
                header("location:../image");
            }else{
                $msg = "<div class=\"alert text-center alert-danger\">Error Please Try Again</div>";
                $_SESSION["msg"]=$msg;
                header("location:../image");
            }
        }
    }
}elseif(isset($_REQUEST["edit_blog"])){
    $blog = $_POST;
    $id = $blog["blog_id"];
    $category = $blog["category"];
    $post = $blog["post"];
    $old_file = $blog["old_file"];
    $name = $blog["name"];
    $file = $_FILES["image"];
    $filenam = $file["name"];
    $filetmp = $file["tmp_name"];
    $filename = str_replace(" ","",strtolower($filenam));
    $rand = rand(999,99999);
    $image = $rand.$filename;
    $des = "../uploads/blog/".$image;
    $old = "../uploads/blog/".$old_file;
    $dis = str_replace(" ","-",strtolower($name));
    $dir = $dis;
    unlink($old);
    $upload = move_uploaded_file($filetmp,$des);
    if ($upload){
        $data = "UPDATE `blog` SET `name`=\"$name\",`dir`=\"$dir\",`category`=\"$category\",`post`=\"$post\",`image`=\"$image\" WHERE id='$id'";
        $update_blog = $edit->update($data);
        if ($update_blog){
            $msg = "<div class=\"alert text-center alert-success\">Success</div>";
            $_SESSION["msg"]=$msg;
            header("location:../blog");
        }else{
            $msg = "<div class=\"alert text-center alert-danger\">Error Please Try Again</div>";
            $_SESSION["msg"]=$msg;
            header("location:../blog");
        }
    }
}elseif(isset($_REQUEST["short_review_edit"])){
    $data = $_POST;
    $customer = $data["customer"];
    $project = $data["project"];
    $review = $data["review"];
    $running = $data["running"];
    $id = $data["id"];
    $admin_id = $data["admin_id"];
    $update = "UPDATE `short_review` SET `customer`='$customer',`project`='$project',`review`='$review',`running`='$running' WHERE id='$id'";
    $update_blog = $edit->update($update);
    if ($update_blog){
        $msg = "<div class=\"alert text-center alert-success\">Success</div>";
        $_SESSION["msg"]=$msg;
        header("location:../short-review");
    }else{
        $msg = "<div class=\"alert text-center alert-danger\">Error Please Try Again</div>";
        $_SESSION["msg"]=$msg;
        header("location:../short-review");
    }
}else{
    header("location:../index");
}
?>