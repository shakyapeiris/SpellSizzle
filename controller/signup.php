<?php


require_once '../config/db.php';

$db = new db();
$connection = $db->conn;
global $connection;

$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$enpassword = md5(sha1($password));

if (empty($email)):
    echo json_encode(["error"=>true,"message" => "Email is required"]);
    return;
endif;


if (empty($password)):
    echo json_encode(["error"=>true,"message" => "Password is required"]);
    return;
endif;

if (strlen($password) < 8):
    echo json_encode(["error"=>true,"message" => "Password must be 8 characters"]);
    return;
endif;


if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
    echo json_encode(["error"=>true,"message" => "Please Type a Valid Email Address"]);
    return;
endif;


$query = "SELECT * FROM users WHERE email = '{$email}'";
$run = mysqli_query($connection, $query);
if (mysqli_num_rows($run) == 1):
    echo json_encode(["error"=>true,"message" => "Email All ready exists"]);
    return;
else:
    $query = "INSERT INTO users(email,password) VALUES ('{$email}','$enpassword')";
    $run = mysqli_query($connection, $query);
    if ($run):
        echo json_encode(["error"=>false,"message" => "Account Created Success"]);
        return;
    endif;

endif;