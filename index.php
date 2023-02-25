<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
<a href="./login.php">Login</a>
<a href="./sign-up.php">signup</a>
<?php

session_start();
if (empty($_SESSION['id'])):
?>
<!--WRITE A CODE TO REDIRECT IN THIS AREA-->
<?php
endif;
?>
</body>
</html>