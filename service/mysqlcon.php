<?php
    session_start();
    $host = "localhost";
    $username = "root";
    $db_name = "projectums";
    $link = mysqli_connect("$host","$username","","$db_name")or die("Cannot Connect");
    mysqli_select_db($link,"$db_name")or die("Cannot Select DB");
    ?>