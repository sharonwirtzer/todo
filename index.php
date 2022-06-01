<?php

include 'render-todos.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="to-do.png" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>toDo</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous" />
</head>

<body>
  <ul class="nav">
    <li class="bar"><a href="index.php">Home</a></li>
    <li class="bar"><a href="add-todo.html">Add ToDo</a></li>
    <li class="bar"><a href="update-todo.php">Update ToDo</a></li>
  </ul>

  <div class="todo-page">
    <h1>To Do List</h1>

    <table class="todo-list">
      <thead>
        <tr>
          <th><i id="date" class="bi bi-sort-down-alt sort-button"></i> </th>
          <th><i id="title" class="bi bi-sort-down sort-button"></i> </th>
        </tr>
      </thead>

      <tbody>
        <?php
        render_todos();
        ?>
      </tbody>

    </table>
    <a href="add-todo.html">
                <input class="button" type="button" value="Add New todo">
            </a>
  </div>

  <!-- <script src="main.js"></script> -->
</body>

</html>