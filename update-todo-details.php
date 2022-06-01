<?php

include 'php/connection.php';

// Get Movie ID

$todo_id = $_POST['id'];

// Get All Data From Form

$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];

// Update Movie Details

$sql = "UPDATE todo
        SET title = '$title', date = '$date', time = '$time'
        WHERE id = '$todo_id'";

$con->query($sql);

// Redirect User To The Home Page

header('Location: index.php');

?>