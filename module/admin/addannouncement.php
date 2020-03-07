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
    background-color: #4DD0E1;
    padding: 20px;
}
</style>
</head>
<body>
<center>
<a href="index.php">Dashboard</a>
<a href="home.php">Home</a>
</center>
   <center> <h1>Upload Announcement</h1> </center>
<form action="#" method="post" enctype="multipart/form-data">
    <div> 
    <input type="text" name="sub" id="subb" placeholder="Subject" onblur="myFunction()">
    <textarea rows="4" cols="50" name="cont">
	</textarea>
	<script>
    function myFunction(){
        var x = document.getElementById("subb");
        x.value = x.value.toUpperCase();
    }
    </script>
    <input type="submit" name="submit">
</div>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	$Sub = $_POST['sub'];
	$Content = $_POST['cont'];
	$today=date("Y-m-d");
    $sql = "INSERT into announcement values('$loged_user_name','$Sub','$today','$Content');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Successfully Uploaded";
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>
