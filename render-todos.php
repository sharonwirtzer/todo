<?php

function render_todos()
{

    include 'php/connection.php';

    $sql = 'SELECT id, title, date, time FROM todo';
    $todos = $con->query($sql);

    $html = '';


    if ($todos->num_rows == 0) {

        echo "<tr><td colspan='4' class='center'>- Currently There Are No Todos To Display -</td></tr>";

        return;
    }

    while ($row = $todos->fetch_object()) {

        $html = $html . '<tr>';

        $html = $html . '<td>';
        $html = $html . '<a href="update-todo.php?id=' . $row->id . '">';
        $html = $html . $row->title;
        $html = $html . '</a>';
        $html = $html . '</td>';

        $html = $html . '<td>' . $row->date . '</td>';
        $html = $html . '<td>' . $row->time . '</td>';

        $html = $html . '</tr>';
    }

    echo $html;
}
