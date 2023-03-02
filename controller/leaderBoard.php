<?php
require_once '../config/db.php';

$db = new db();
$connection = $db->conn;
$leaderBoard = [];
$topPlayers = [];

$topPlayerQuery = "SELECT * FROM users  ORDER BY rate DESC LIMIT 10";
$topPlayerQueryRun = mysqli_query($connection, $topPlayerQuery);
while ($data = mysqli_fetch_assoc($topPlayerQueryRun)) {
    array_push($topPlayers, $data);
}

echo json_encode(["players" => $topPlayers]);
