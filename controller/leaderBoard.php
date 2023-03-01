<?php
require_once '../config/db.php';

$db = new db();
$connection = $db->conn;
$leaderBoard = [];
$topPlayers = [];
$query = "SELECT * FROM users HAVING rate >=1000 ORDER BY rate DESC LIMIT 3";
$run = mysqli_query($connection, $query);
while ($data = mysqli_fetch_assoc($run)){
    array_push($leaderBoard,$data);
}


$topPlayerQuery = "SELECT * FROM users HAVING rate >=1000 ORDER BY rate DESC LIMIT 10";
$topPlayerQueryRun = mysqli_query($connection, $query);
while ($data = mysqli_fetch_assoc($topPlayerQueryRun)){
    array_push($topPlayers,$data);
}

echo json_encode(["leaderBoard"=>$leaderBoard,"topPlayers"=>$topPlayers]);


