<?php

// Connect To The Database

include 'php/connection.php';

// Get tasks Details

$ID = $_REQUEST['ID'];

$sql = "SELECT * FROM Tasks WHERE ID = '$ID'";
$Tasks = $con->query($sql)->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="to-do.png" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update Task</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>

  <form class="task-page" action="update-task-details.php" method="post">
    <input type="hidden" name="ID" value="<?php echo $Tasks->ID ?>">

    <h1>Update Task</h1>

    <div class="form-field">
      <label for="Title">Title</label>
      <input type="text" name="Title" id="Title" class="text-field" required value="<?php echo $Tasks->Title ?>" />
    </div>
    <div class="form-field">
      <label for="Date">Date</label>
      <input type="date" name="Date" id="Date" class="text-field" required value="<?php echo $Tasks->Date ?>" />
    </div>
    <div class="form-field">
      <label for="Time">Time</label>
      <input type="number" name="Time" id="Time" class="text-field" required value="<?php echo $Tasks->Time ?>" />
    </div>

    <div class="button-container">

      <div class="">
        <input height=30px class="" type="image" src="img/ok.png" alt="Submit" value="">
      </div>

      <a href="delete-task.php?ID=<?php echo $ID ?>">
        <input hidden type="button" value=""><img class="bla" src="img/bin.png" />
      </a>
    </div>
  </form>
  <footer>
    <ul class="footer">
      <li class="nav-bar"><a href="index.php">My Tasks</a></li>
      <li class="nav-bar"><a href="add-task.html">Add new Task</a></li>
      <li class="nav-bar"><a href="update-task.php">Update Task</a></li>
    </ul>
  </footer>

</body>

</html>