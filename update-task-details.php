<?php

// Connect To The Database

include 'php/connection.php';

// Get task ID

$ID = $_POST['ID'];

// Get All Data From Form

$Title = $_POST['Title'];
$Date = $_POST['Date'];
$Time = $_POST['Time'];

// Update tasks Details

$sql = "UPDATE Tasks
        SET Title = '$Title', Date = '$Date', Time = '$Time'
        WHERE ID = '$ID'";

$con->query($sql);

// Redirect User To The Home Page

header('Location: index.php');
