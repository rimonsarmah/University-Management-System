<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Add Result</title>
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
   <center> <h1>Add Important Dates</h1> </center>
    </div>
    </div>
<form action="#" method="post" enctype="multipart/form-data" onsubmit="return(validate());">
    <div>
    Enter Date: 
    <input type="date" name="date">
   	Enter Subject:
    <input type="text" name="subject">
    <input id="submit" type="submit"  name="submit" value="Submit">
</div>
</form>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	$Date = $_POST['date'];
	$Subject = $_POST['subject'];
    $sql = "INSERT INTO importantdates VALUES('$Subject','$Date');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Data Entered Successfully";
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>
