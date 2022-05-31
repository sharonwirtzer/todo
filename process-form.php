<?php

include 'php/connection.php';

// Get Movie Details From The Form

$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];

 // Insert Movie Details Into The Database


 $sql = "INSERT INTO todo (title, date, time) 
         VALUES ('$title', '$date', '$time')";


$con->query($sql);

// Redirect User To The Homepage

header('Location: index.html'); 

