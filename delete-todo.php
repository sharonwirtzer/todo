<?php

include 'php/connection.php';

$todo_id = $_REQUEST['id'];

$sql = "DELETE FROM todo WHERE id = '$todo_id'";
$con->query($sql);

// Redirect User To The Home Page

header('Location: index.php');

?>