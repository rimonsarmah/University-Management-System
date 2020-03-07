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
   <center> <h1>Add Faculty</h1> </center>
    </div>
    </div>
<form action="#" method="post" enctype="multipart/form-data">
    <div>
    Enter Faculty ID: 
    <input type="text" name="fid">
    Enter Faculty Name: 
    <input type="text" name="fname">
    Enter Subject: 
    <input type="text" name="fsubject">
    Enter Password: 
    <input type="text" name="fpass">
    Enter Phone No: 
    <input type="text" name="fphno">
    Enter Email ID: 
    <input type="text" name="femail">
    Enter DOB: 
    <input type="date"  name="fdob">
    Enter Date of Joining: 
    <input type="date" name="fdoj">
    Enter Address: 
    <input type="text" name="fadd">
    Select Gender:
    <select name="fgender">
     	<option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
   	</select>
    Photo of the faculty: 
    <input id="fcPhoto"type="file" name="facultyPhoto">
    <input id="submit" type="submit"  name="submit"value="Submit">
</div>

</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	$facID = $_POST['fid'];
	$facName= $_POST['fname'];
    $facSub = $_POST['fsubject'];
    $facPass = $_POST['fpass'];
    $facPhone = $_POST['fphno'];
    $facEmail = $_POST['femail'];
    $facDOB = $_POST['fdob'];
    $facDOJ = $_POST['fdoj'];
    $facAdd = $_POST['fadd'];
    $facGender = $_POST['fgender'];
    $filetmp =$_FILES['facultyPhoto']['tmp_name'];
    move_uploaded_file($filetmp,"../images/".$facID.".jpg");
     $sql = "INSERT INTO faculty VALUES('$facID','$facName','$facSub','$facPass','$facPhone','$facEmail','$facDOB','$facDOJ','$facAdd','$facGender');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
     $sql1 = "INSERT INTO users VALUES('$facID','$facPass','faculty');";
    $success1 = mysqli_query($link,$sql1);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Data Entered Successfully and Student Id is  ".$facID;
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>