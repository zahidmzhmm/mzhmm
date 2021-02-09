<?php
session_start();
include "class/Db.php";
include "class/Insert.php";
$insert = new Insert();
if (isset($_REQUEST["skill_save"])){
    $data = $_POST;
    $name = $data["name"];
    $percent = $data["percent"];
    $admin_id = $data["admin_id"];
    $insert_query = "INSERT INTO `skill`(`name`, `percent`, `admin_id`) VALUES ('$name','$percent','$admin_id')";
    $insert_data = $insert->insertskill($insert_query);
    if ($insert_data){
        $msg = "<div class=\"alert text-center alert-success\">Success</div>";
        $_SESSION["msg"]=$msg;
        header("location:../skill");
    }else{
        $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
        $_SESSION["msg"]=$msg;
        header("location:../skill");
    }
}elseif (isset($_REQUEST["portfolio_save"])){
    $data = $_POST;
    $admin = $data["admin_id"];
    $name = $data["name"];
    $description = $data["description"];
    $file = $_FILES["image"];
    $filename = $file["name"];
    $filetmp = $file["tmp_name"];
    $rand = rand(99,999);
    $file_name_rp = str_replace(' ','',strtolower($filename));
    $image = $rand.$file_name_rp;
    $dir = "../../img/portfolio/".$image;
    $upload = move_uploaded_file($filetmp,$dir);
    if ($upload){
        $insert_query = "INSERT INTO `portfolio`(`name`, `description`, `file`, `admin_id`) VALUES ('$name','$description','$image','$admin')";
        $insert_data = $insert->insertskill($insert_query);
        if ($insert_data){
            $msg = "<div class=\"alert text-center alert-success\">Success</div>";
            $_SESSION["msg"]=$msg;
            header("location:../portfolio");
        }else{
            $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
            $_SESSION["msg"]=$msg;
            header("location:../portfolio");
        }
    }
}elseif (isset($_REQUEST["service_save"])){
    $data = $_POST;
    $admin = $data["admin_id"];
    $name = $data["name"];
    $description = $data["description"];
    $file = $_FILES["image"];
    $filename = $file["name"];
    $filetmp = $file["tmp_name"];
    $rand = rand(99,999);
    $file_name_rp = str_replace(' ','',strtolower($filename));
    $image = $rand.$file_name_rp;
    $dir = "../../img/icon/".$image;
    $upload = move_uploaded_file($filetmp,$dir);
    if ($upload){
        $insert_query = "INSERT INTO `service`(`name`, `description`, `file`, `admin_id`) VALUES ('$name','$description','$image','$admin')";
        $insert_data = $insert->insertskill($insert_query);
        if ($insert_data){
            $msg = "<div class=\"alert text-center alert-success\">Success</div>";
            $_SESSION["msg"]=$msg;
            header("location:../service");
        }else{
            $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
            $_SESSION["msg"]=$msg;
            header("location:../service");
        }
    }
}elseif (isset($_REQUEST["works_save"])){
    $works = $_POST;
    $file = $_FILES["image"];
    $file_tmp = $file["tmp_name"];
    $filesize = $file["size"];
    $admin_id = $works["admin_id"];
    $name = $works["name"];
    $country = $works["country"];
    $comment = $works["comment"];
    $review = $works["review"];
    if ($filesize==0){
        $insert_without = "INSERT INTO `works`(`name`, `comment`, `review`, `country`, `admin_id`) VALUES ('$name','$comment','$review','$country','$admin_id')";
        $insert_data = $insert->insertskill($insert_without);
        if ($insert_data){
            $msg = "<div class=\"alert text-center alert-success\">Success</div>";
            $_SESSION["msg"]=$msg;
            header("location:../works");
        }else{
            $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
            $_SESSION["msg"]=$msg;
            header("location:../works");
        }
    }else{
        $rand = rand(9,999);
        $image_name = $rand.str_replace(" ",'', strtolower($file["name"]));
        $upload_dir = "../img/".$image_name;
        $upload = move_uploaded_file($file_tmp,$upload_dir);
        if ($upload){
            $insert_with = "INSERT INTO `works`(`name`, `image`, `comment`, `review`, `country`, `admin_id`) VALUES ('$name','$image_name','$comment','$review','$country','$admin_id')";
            $insert_data = $insert->insertskill($insert_with);
            if ($insert_data){
                $msg = "<div class=\"alert text-center alert-success\">Success</div>";
                $_SESSION["msg"]=$msg;
                header("location:../works");
            }else{
                $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
                $_SESSION["msg"]=$msg;
                header("location:../works");
            }
        }else{
            $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
            $_SESSION["msg"]=$msg;
            header("location:../works");
        }
    }
}elseif (isset($_REQUEST["blog_save"])){
    $blog = $_POST;
    $admin_id = $blog["admin_id"];
    $category = $blog["category"];
    $post = $blog["post"];
    $name = $blog["name"];
    $file = $_FILES["image"];
    $filenam = $file["name"];
    $filetmp = $file["tmp_name"];
    $filename = str_replace(" ","",strtolower($filenam));
    $rand = rand(999,99999);
    $image = $rand.$filename;
    $des = "../../img/blog/".$image;
    $dis = str_replace(" ","-",strtolower($name));
    $dir = $dis;
    $upload = move_uploaded_file($filetmp,$des);
    if ($upload){
        $insert_blog = "INSERT INTO `blog`(`name`, `dir`, `category`, `post`, `image`, `admin_id`) VALUES (\"$name\",\"$dir\",\"$category\",\"$post\",\"$image\",\"$admin_id\")";
        $inserted_blog = $insert->insertskill($insert_blog);
        if ($inserted_blog){
            $msg = "<div class=\"alert text-center alert-success\">Success</div>";
            $_SESSION["msg"]=$msg;
            header("location:../add-blog");
        }else{
            $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
            $_SESSION["msg"]=$msg;
            header("location:../add-blog");
        }
    }
}elseif (isset($_REQUEST["short_review"])){
    $data = $_POST;
    $customer = $data["customer"];
    $project = $data["project"];
    $review = $data["review"];
    $running = $data["running"];
    $admin_id = $data["admin_id"];
    $insert_blog = "INSERT INTO `short_review`(`customer`, `project`, `review`, `running`, `admin_id`) VALUES ('$customer','$project','$review','$running','$admin_id')";
    $inserted_blog = $insert->insertskill($insert_blog);
    if ($inserted_blog){
        $msg = "<div class=\"alert text-center alert-success\">Success</div>";
        $_SESSION["msg"]=$msg;
        header("location:../short-review");
    }else{
        $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
        $_SESSION["msg"]=$msg;
        header("location:../short-review");
    }
}elseif(isset($_REQUEST["gallery"])){
    $file = $_FILES["image"];
    $filename = $file["name"];
    $filetmp = $file["tmp_name"];
    $admin_id = $_REQUEST["admin_id"];
    $type = $_REQUEST["lock"];
    $rand = rand(99,999);
    $file_name_rp = str_replace(' ','',strtolower($filename));
    $files = $rand.$file_name_rp;
    $dir = "../../img/gallery/".$files;
    $upload = move_uploaded_file($filetmp,$dir);
    if ($upload){
        $insert_query = "INSERT INTO `gallery` (`files`, `admin_id`, `type`) VALUES ('$files', '$admin_id','$type');";
        $insert_data = $insert->insertskill($insert_query);
        if ($insert_data){
            $msg = "<div class=\"alert text-center alert-success\">Success</div>";
            $_SESSION["msg"]=$msg;
            header("location:../add-gallery");
        }else{
            $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
            $_SESSION["msg"]=$msg;
            header("location:../add-gallery");
        }
    }
}elseif (isset($_REQUEST["category"])){
    $name = $_REQUEST["name"];
    $type = $_REQUEST["type"];
    $admin_id = $_REQUEST["admin_id"];
    $insert_query = "INSERT INTO `category` (`name`, `admin_id`, `type`) VALUES ('$name','$admin_id','$type');";
    $insert_data = $insert->insertskill($insert_query);
    if ($insert_data){
        $msg = "<div class=\"alert text-center alert-success\">Success</div>";
        $_SESSION["msg"]=$msg;
        header("location:../category");
    }else{
        $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
        $_SESSION["msg"]=$msg;
        header("location:../category");
    }
}else{
    header("location:index");
}
?>