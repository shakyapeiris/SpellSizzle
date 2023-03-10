<?php


require_once '../config/db.php';

$db = new db();
$connection = $db->conn;
global $connection;

// PREDEFINED PROFILE PICTURES ARRAY
$profilePics = [
    "https://hips.hearstapps.com/rbk.h-cdn.co/assets/17/35/1504106954-monkey.jpg",
    "https://cdn.britannica.com/22/206222-050-3F741817/Domestic-feline-tabby-cat.jpg",
    "https://i.natgeofe.com/k/c3acb8e8-eb30-4b53-8fc5-4ae9f0de9c4c/ww-funny-animal-faces-hippopotamus.jpg",
    "https://i.insider.com/566b450bdd08953c448b46c5?width=1000&format=jpeg&auto=webp",
    "https://images.unsplash.com/photo-1540573133985-87b6da6d54a9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZnVubnklMjBhbmltYWx8ZW58MHx8MHx8&w=1000&q=80",
    "https://thumbs.dreamstime.com/b/funny-animal-kissing-lips-cards-thank-you-birthday-invitation-other-events-showing-giraf-funny-animal-kissing-168472188.jpg",
    "https://play-lh.googleusercontent.com/SZpyRU_FB9qpQsO8uXRrQcC1RZ-HFvqzmB2aaJ-QdK-PA_Rg-bx90onXgHUcwZpg18k",
    "https://images.theconversation.com/files/438138/original/file-20211216-25-1hu3e65.jpg?ixlib=rb-1.1.0&rect=42%2C0%2C4715%2C3126&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7eNk99sdClCr6PgSJ4lory52uLyonJBW_yQ&usqp=CAU",
];

// GET RANDOM ELEMENTS IN ARRAY
$profilePic =$profilePics[array_rand($profilePics)];

// PREVENTING SQL INJECTION ATTACK
$email = mysqli_real_escape_string($connection, $_POST['email']);
$userName = mysqli_real_escape_string($connection, $_POST['userName']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
// PASSWORD HASHING
$enpassword = md5(sha1($password));

// FIELD VALIDATION
if (empty($email)):
    echo json_encode(["error"=>true,"message" => "Email is required"]);
    return;
endif;


if (empty($password)):
    echo json_encode(["error"=>true,"message" => "Password is required"]);
    return;
endif;
if (empty($userName)):
    echo json_encode(["error"=>true,"message" => "User name is required"]);
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

//  CHECK IF USER NAME EXISTS
$userNameFindQuery = "SELECT * FROM users WHERE username = '{$userName}'";
$userNameFindQueryRun = mysqli_query($connection, $userNameFindQuery);
if (mysqli_num_rows($userNameFindQueryRun) == 1):
    echo json_encode(["error"=>true,"message" => "User name All ready exists"]);
    return;

endif;

//  CHECK IF THE MAIL EXISTS
$emailFindQuery = "SELECT * FROM users WHERE email = '{$email}'";
$emailFindQueryRun = mysqli_query($connection, $emailFindQuery);
if (mysqli_num_rows($emailFindQueryRun) == 1):
    echo json_encode(["error"=>true,"message" => "Email All ready exists"]);
    return;
else:
//     ACCOUNT CREATION
    $query = "INSERT INTO users(email,password,username,image) VALUES ('{$email}','{$enpassword}','{$userName}','{$profilePic}')";
    $run = mysqli_query($connection, $query);
    if ($run):
        echo json_encode(["error"=>false,"message" => "Account Created Success"]);
        return;
    endif;

endif;