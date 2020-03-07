<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Add Placement</title>
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
   <center> <h1>Add Placement</h1> </center>
    </div>
    </div>
<form action="#" method="post" enctype="multipart/form-data">
    <div>
    Date: 
    <input type="date" name="date" placeholder="YYYY-MM-DD">
   	Enter Company Name: 
    <input type="text" name="company">
    Enter Cutoff CGPA: 
    <input type="text" name="cgpa">
    Enter Stream: 
    <input type="text" name="stream">
    <input id="submit" type="submit"  name="submit" value="Submit">
</div>
</form>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	$Date = $_POST['date'];
	$Company= $_POST['company'];
    $CGPA = $_POST['cgpa'];
    $Stream = $_POST['stream'];
    $sql = "INSERT INTO placement VALUES('$Date','$Company','$CGPA','$Stream');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Data Entered Successfully";
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>
