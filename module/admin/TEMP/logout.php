<?php
include ('../../service/mysqlcon.php');
session_start();
session_destroy(1);
mysqli_close($link);
header("Location: ../../");
?>
