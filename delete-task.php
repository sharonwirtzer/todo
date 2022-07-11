<?php

// Connect To The Database

include 'php/connection.php';

// Delete Task

$ID = $_REQUEST['ID'];

$sql = "DELETE FROM Tasks WHERE ID = '$ID'";
$con->query($sql);

// Redirect User To The Home Page

header('Location: index.php');
