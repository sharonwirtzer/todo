<?php

include 'render-tasks.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="to-do.png" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Tasks</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>

  <div class="task-page">
    <h1>My Tasks</h1>
    <table>
      <thead>
        <tr>
          <th> Title </th>
          <th> Need to do until.. </th>
          <th> Itll take me.. </th>
        </tr>
      </thead>

      <tbody>
        <?php
        render_tasks();
        ?>
      </tbody>
    </table>
    <a href="add-task.html">
      <input class="button" type="button" value="Add new task ➕">
    </a>
  </div>
  <footer>
    <ul class="footer">
      <li class="nav-bar"><a href="index.php">My Tasks</a></li>
      <li class="nav-bar"><a href="add-task.html">Add new Task</a></li>
      <li class="nav-bar"><a href="update-task.php">Update Task</a></li>
    </ul>
  </footer>
</body>

</html>