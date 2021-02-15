<?php
session_start();
include "class/Db.php";
include "class/Insert.php";
$insert = new Insert();
if (isset($_REQUEST["id"]) && isset($_REQUEST["table"])) {
    $data = $_GET;
    $id = $data["id"];
    $table = $data["table"];
    $dis = $data["dis"];
    $file = $data["file"];
    $destination = "../../uploads/".$dis."/".$file;
    unlink($destination);
    $delete = "DELETE FROM `$table` WHERE id='$id'";
    $deleted = $insert->insertskill($delete);
    if ($deleted){
            $msg = "<div class=\"alert text-center alert-success\">Success</div>";
            $_SESSION["msg"]=$msg;
            if ($_REQUEST["table"]=='works'){
                header("location:../works");
            }elseif ($_REQUEST["table"]=='skill'){
                header("location:../skill");
            }elseif ($_REQUEST["table"]=='blog'){
                header("location:../blog");
            }elseif ($_REQUEST["table"]=='service'){
                header("location:../service");
            }elseif ($_REQUEST["table"]=='portfolio'){
                header("location:../portfolio");
            }elseif ($_REQUEST["table"]=='gallery'){
                header("location:../gallery");
            }elseif ($_REQUEST["table"]=='category'){
                header("location:../category");
            }
    }else{
        $msg = "<div class=\"alert text-center alert-danger\">Something Problem</div>";
            $_SESSION["msg"]=$msg;
        if ($_REQUEST["table"]=='works'){
            header("location:../works");
        }elseif ($_REQUEST["table"]=='skill'){
            header("location:../skill");
        }elseif ($_REQUEST["table"]=='blog'){
            header("location:../blog");
        }elseif ($_REQUEST["table"]=='service'){
            header("location:../service");
        }elseif ($_REQUEST["table"]=='portfolio'){
            header("location:../portfolio");
        }elseif ($_REQUEST["table"]=='gallery'){
            header("location:../gallery");
        }elseif ($_REQUEST["table"]=='category'){
            header("location:../category");
        }
    }
}