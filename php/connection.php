<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'todos';



// Create Connection

$con = new mysqli($server, $user, $password, $db);

if ($con->connect_error)
    die('Connection Failed: ' . $con->connect_error);

?>