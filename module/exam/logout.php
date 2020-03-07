<?php
include ('../../service/mysqlcon.php');
$_SESSION['login_id']='';
mysqli_close($link);
header("Location: ../../");
?>
