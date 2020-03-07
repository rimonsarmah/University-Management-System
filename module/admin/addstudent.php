<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Add Student</title>
 <link rel="stylesheet" href="style.css">
<style>

 <link rel="stylesheet" href="style.css">
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
</head>
<body>
   <center> <h1>Add Student</h1> </center>
    </div>
    </div>
<form action="#" method="post" enctype="multipart/form-data">
    <div>
    Enter Student ID: 
    <input type="text" name="sid">
    Enter Student Name: 
    <input type="text" name="sname">
    Enter Student Stream: 
    <input type="text" name="sstream">
    Enter Password: 
    <input type="text" name="spass">
    Enter Phone No: 
    <input type="text" name="sphno">
    Enter Email ID: 
    <input type="text" name="semail">
    Enter DOB: 
    <input type="date" name="sdob" placeholder="YYYY-MM-DD">
    Enter Date of Admission: 
    <input type="date" name="sdoa" placeholder="YYYY-MM-DD">
    Enter Address: 
    <input type="text" name="sadd">
    Select Gender:
    <select name="sgender">
     	<option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
   	</select>
    Photo of the student: 
    <input id="stuPhoto"type="file" name="stuPhoto">
    <input id="submit" type="submit"  name="submit" value="Submit">
</div>
</form>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	$stuID = $_POST['sid'];
	$stuName= $_POST['sname'];
    $stuStream = $_POST['sstream'];
    $stuPass = $_POST['spass'];
    $stuPhone = $_POST['sphno'];
    $stuEmail = $_POST['semail'];
    $stuDOB = $_POST['sdob'];
    $stuDOA = $_POST['sdoa'];
    $stuAdd = $_POST['sadd'];
    $stuGender = $_POST['sgender'];
    $filetmp =$_FILES['stuPhoto']['tmp_name'];
    move_uploaded_file($filetmp,"../images/".$stuID.".jpg");
    $sql = "INSERT INTO student VALUES('$stuID','$stuName','$stuStream','$stuPass','$stuPhone','$stuEmail','$stuDOB','$stuDOA','$stuAdd','$stuGender');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $sql1 = "INSERT INTO users VALUES('$stuID','$stuPass','student');";
    $success1 = mysqli_query($link,$sql1);
    if(!$success1) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Data Entered Successfully and Student Id is  ".$stuID;
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>
