<?php

include_once('mysqlcon.php');
$myid=$_POST['myid'];
$mypassword=$_POST['mypassword'];
$myid = stripslashes($myid);
$mypassword = stripslashes($mypassword);
$myid = mysqli_real_escape_string($link,$myid);
$mypassword = mysqli_real_escape_string($link,$mypassword);
$_SESSION['login_id']=$myid;
$sql="SELECT usertype FROM users WHERE userid='$myid' and password='$mypassword'";
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);
$type=mysqli_fetch_array($result);
$control=$type['usertype'];
//echo $count;

if($count!=1 || !isset($control)){
    header("Location:../index.php?login=false");
}
else if($count==1 && $control=="admin"){
    header("Location:../module/admin");
}
else if($count==1 && $control=="student"){
    header("Location:../module/student");
}
else if($count==1 && $control=="faculty"){
    header("Location:../module/faculty");
}
else if($count==1 && $control=="examinar"){
    header("Location:../module/exam");
}
else {
    header("Location:../index.php?login=false");
}
?>
