<?php

//   create connection

$db_host ='localhost';
$db_name ='quizzer';
$db_user ='root';


// create mysqli object

$mysqli = new mysqli ($db_host, $db_name,  $db_user);

// error handler

if ($mysqli);
{
    printf("connect failed: %s/n", $mysqli);
    exit();
}
















?>