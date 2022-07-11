<?php

function render_tasks()
{

    // Connect To The Database

    include 'php/connection.php';

    $sql = 'SELECT ID, Title, Date, Time FROM Tasks';
    $Tasks = $con->query($sql);
    $html = '';


    if ($Tasks->num_rows == 0) {

        echo "<tr><td colspan='4' class='center'>- Currently There Are No Tasks To Display -</td></tr>";

        return;
    }

    while ($row = $Tasks->fetch_object()) {

        $html = $html . '<tr class=form-field>';
        $html = $html .  '<td>';
        $html = $html . '<a href="update-task.php?ID=' . $row->ID . '">';
        $html = $html . $row->Title;
        $html = $html . '</a>';
        $html = $html .  '</td>';
        $html = $html . '<td>' . $row->Date . '</td>';
        $html = $html . '<td>' . $row->Time . '<span> min</span>' . '</td>';
        $html = $html . '</tr>';
    }

    echo $html;
}
