<?php

session_start();
if (empty($_SESSION['id'])):
    echo json_encode(["error"=>true,"message"=>"UnAuthorized"]);
endif;



require_once '../config/db.php';
$db = new db();
$connection = $db->conn;
global $connection;
// PREVENTING SQL INJECTION ATTACK
$uid = mysqli_real_escape_string($connection,$_POST['uid']);


// CHECK IF THE ID IS AVAILABLE
if (empty($uid)):
    echo json_encode(["error"=>true,"message"=>"User Id is required"]);
else:
    //    CHECK IF THE USER ID EXISTS
    $findUSerQuery = "SELECT * FROM users WHERE id={$uid}";
    $findUSerQueryRun =mysqli_query($connection,$findUSerQuery);
    if (mysqli_fetch_assoc($findUSerQueryRun) === null):
        echo json_encode(["error"=>true,"message"=>"Invalid user ID"]);
        endif;
    //    DECREMENTATION
    $updateQuery = "UPDATE users SET rate=rate+5 WHERE id={$uid}";
    $updateQueryRun =mysqli_query($connection,$updateQuery);
//  GET UPDATED RATE
    $updatedRateQuery = "SELECT rate FROM users WHERE id={$uid}";
    $updatedRateQueryRun =mysqli_query($connection,$updatedRateQuery);
    if ($updatedRate = mysqli_fetch_assoc($updatedRateQueryRun)):
        $_SESSION['rate'] = $updatedRate['rate'];
        echo  json_encode(["error"=>false,"message"=>"You have won 5 points"]);
    endif;
endif;