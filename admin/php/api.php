<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
include "select.php";
if (isset($_GET['page']) && $_GET['auth']){
    if ($_GET['auth']=='admin12123'){
        if ($_GET['page']=='home'){
            echo json_encode($admin);
        }elseif ($_GET['page']=='skill'){
            echo json_encode(mysqli_fetch_all($skill,MYSQLI_ASSOC));
        }elseif ($_GET['page']=='service'){
            echo json_encode(mysqli_fetch_all($services,MYSQLI_ASSOC));
        }elseif ($_GET['page']=='clients'){
            echo json_encode(mysqli_fetch_all($works,MYSQLI_ASSOC));
        }elseif ($_GET['page']=='short_reviews'){
            echo json_encode(mysqli_fetch_array($short_reviews));
        }
    }else{
        echo "Authorization Failed";
    }
}