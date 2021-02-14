<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
include "select.php";
if (isset($_GET['page']) && $_GET['auth']){
    if ($_GET['auth']=='admin12123'){
        if ($_GET['page']=='home'){
            echo json_encode($admin);
        }elseif ($_GET['page']=='skill'){
            echo json_encode($skill);
        }
    }else{
        echo "Authorization Failed";
    }
}