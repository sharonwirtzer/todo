<?php

include 'php/connection.php';

// Get todo Details

$todo_id = $_REQUEST['id'];

$sql = "SELECT * FROM todo WHERE id = '$todo_id'";
$todo = $con->query($sql)->fetch_object();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="to-do.png" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>update-todo</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous" />
</head>

<body>
  <ul class="nav">
    <li class="bar"><a href="index.php">Home</a></li>
    <li class="bar"><a href="add-todo.html">Add ToDo</a></li>
    <li class="bar"><a href="update-todo.php">Update ToDo</a></li>
  </ul>

  <form class="todo-page" action="update-todo-details.php" method="post">
  <input type="hidden" name="id" value="<?php echo $todo->id ?>">
    <h1>Update ToDo</h1>
    <div class="form-field">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="text-field" required
      value="<?php echo $todo->title?>" />
    </div>
    <div class="form-field">
      <label for="date">Date</label>
      <input type="text" name="date" id="date" class="text-field" required
      value="<?php echo $todo->date?>"  />
    </div>
    <div class="form-field">
      <label for="time">Time</label>
      <input type="text" name="time" id="time" class="text-field" required
      value="<?php echo $todo->time?>" />
    </div>



    <div class="button-container">
      <input class="button form-button" type="submit" value="Update Movie">
    </div>
    <div class="button-container">
      <a href="delete-todo.php?id=<?php echo $todo_id?>">
        <input class="button form-button delete-button" type="button" value="Delete Movie">
      </a>
    </div>

  </form>

</body>

</html>