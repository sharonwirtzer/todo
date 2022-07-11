<?php

// Connect To Database

include 'php/connection.php';

// Get tasks Details From The Form

$Title = $_POST['Title'];
$Date = $_POST['Date'];
$Time = $_POST['Time'];

// Insert tasks Details Into The Database

$sql = "INSERT INTO Tasks (Title, Date, Time) 
         VALUES ('$Title', '$Date', '$Time')";


$con->query($sql);

// Redirect User To The Homepage

header('Location: index.php');
