<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Apply Leave</title>
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
   <center> <h1>Apply Leave</h1> </center>
    </div>
    </div>
<form action="#" method="post" enctype="multipart/form-data">
    <div>
    Enter Date: 
    <input type="date" name="date">
    <br>
    Select Span:
    <select name="span">
     	<option value="Full Day">Full Day</option>
          <option value="First Half">First Half</option>
          <option value="Second Half">Second Half</option>
   	</select>
    <input id="submit" type="submit"  name="submit" value="Submit">
</div>
</form>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	$Date = $_POST['date'];
	$Span= $_POST['span'];
	$approve="Approved";
    $sql = "INSERT INTO leavetable VALUES('','$loged_user_id','$loged_user_name','$Date','$Span','$approve');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Leave Automatically Approved";
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>
