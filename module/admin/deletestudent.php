<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Add Student</title>
 <link rel="stylesheet" href="style.css">
<style>

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
</head>
<body>
   <center> <h1>Delete Student</h1> </center>
<form action="#" method="post" enctype="multipart/form-data">
    <div>
    Enter Student ID: 
    <input type="text" name="sid">
    <input type="submit" name="submit">
</div>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	$stuID = $_POST['sid'];
    $sql = "DELETE FROM student where id='$stuID';";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $sql = "DELETE FROM users where userid='$stuID';";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Successfully Deleted. ID: ".$stuID;
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>