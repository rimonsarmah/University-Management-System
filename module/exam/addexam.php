<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Add Exam</title>
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
   <center> <h1>Add Exam</h1> </center>
    </div>
    </div>
<form action="#" method="post" enctype="multipart/form-data">
    <div>
    Enter Stream: 
    <input type="text" name="stream">
    Select Subject:
    <select name="subject">
     	<option value="Programming 1">Programming 1</option>
          <option value="PHP">PHP</option>
          <option value="Java">Java</option>
          <option value="Python">Python</option>
          <option value="Node JS">Node JS</option>
   	</select>
   	Enter Date: 
    <input type="date" name="date" placeholder="YYYY-MM-DD">
    <br>
    Enter Room No: 
    <input type="text" name="roomno">
    Enter Timing: 
    <input type="text" name="timing">
    <input id="submit" type="submit"  name="submit" value="Submit">
</div>
</form>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	$Stream = $_POST['stream'];
	$Sub= $_POST['subject'];
    $EDate = $_POST['date'];
    $Room = $_POST['roomno'];
    $Time = $_POST['timing'];
    $sql = "INSERT INTO exam VALUES('$Stream','$Sub','$EDate','$Room','$Time');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Data Entered Successfully";
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>
