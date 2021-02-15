<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST,GET,PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-with");
$request = json_decode(file_get_contents("php://input"),true);
if (isset($_GET['page']) && $_GET['auth']){
    include "select.php";
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
        }elseif ($_GET['page']=='portfolio'){
            echo json_encode(mysqli_fetch_all($portfolios,MYSQLI_ASSOC));
        }elseif ($_GET['page']=='portfolio_with_limit'){
            echo json_encode(mysqli_fetch_all($portfolios_with_limit,MYSQLI_ASSOC));
        }elseif ($_GET['page']=='service_with_limit'){
            echo json_encode(mysqli_fetch_all($services_with_limit,MYSQLI_ASSOC));
        }elseif ($_GET['page']=='categories1'){
            echo json_encode(mysqli_fetch_all($categories_type1,MYSQLI_ASSOC));
        }elseif ($_GET['page']=='categories2'){
            echo json_encode(mysqli_fetch_all($categories_type2,MYSQLI_ASSOC));
        }
    }else{
        echo "Authorization Failed";
    }
}
if (isset($request['auth'])){
    include "class/Db.php";
    require 'phpmailer/PHPMailerAutoload.php';
    require 'phpmailer/credential.php';
    require "class/Contact.php";
    if ($request['auth']=='admin12123'){
        if (isset($request['send_message'])){
            $name = $request['name'];
            $email = $request['email'];
            $subject = $request['subject'];
            $message = $request['message'];
            $contact = new Contact();
            $contact->email_send($name,$email,$subject,$message);
        }
        echo json_encode([
            "success"=>false,
            "message"=>"Message Send Error"
        ]);
    }else{
        echo "Authorization Failed";
    }
}