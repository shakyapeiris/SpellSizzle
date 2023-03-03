<?php

require_once '../config/db.php';
session_start();
$db = new db();
$connection = $db->conn;
global $connection;

// PREVENTING SQL INJECTION ATTACK
$userName = mysqli_real_escape_string($connection, $_POST['userName']);
$password = mysqli_real_escape_string($connection,$_POST['password']);
$enpassword= md5(sha1($password));

//    VALIDATIONS
if (empty($userName)):
    echo json_encode(["error"=>true,"message" => "User name is required"]);
    return;

endif;
if (empty($password)):
    echo json_encode(["error"=>true,"message"=>"Password is required"]);
return;
endif;

if (strlen($password) < 8):
    echo json_encode(["error"=>true,"message"=>"Password must be 8 characters"]);
return;
endif;

//    CHECK IF THE USER EXISTS
$query ="SELECT * FROM users WHERE username = '{$userName}' AND  `password` = '{$enpassword}'";
$run =mysqli_query($connection,$query);
if (mysqli_num_rows($run)==1):
    if($result=mysqli_fetch_assoc($run)):
//  DEFINE SESSION VARIABLES
        $_SESSION['id']= $result['id'];
        $_SESSION['email']= $result['email'];
        $_SESSION['username']= $result['username'];
        $_SESSION['profilePic']= $result['image'];
        $_SESSION['rate']= $result['rate'];
        echo json_encode(["error"=>false,"message"=>"login success"]);
        return;
    endif;

    else:
        echo json_encode(["error"=>true,"message"=>"invalid User Name Or Password"]);
        return;
endif;