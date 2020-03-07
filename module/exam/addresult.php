<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Add Result</title>
<script>
            function validate()
            {
                if(document.getElementById("tm").value=="-1")
                {
                    alert("Please select term");
                    document.getElementById("tm").focus();
                    return false;
                }
                return( true );
            }
        </script>
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
   <center> <h1>Add Result</h1> </center>
    </div>
    </div>
<form action="#" method="post" enctype="multipart/form-data" onsubmit="return(validate());">
    <div>
    Enter ID: 
    <input type="text" name="id">
    <select name="term" id="tm">
     	<option value="-1">Select Term</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
   	</select>
   	Enter CGPA:
    <input type="text" name="cgpa">
    <br>
    Enter Attendance: 
    <input type="text" name="attendance">
    <input id="submit" type="submit"  name="submit" value="Submit">
</div>
</form>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	$ID = $_POST['id'];
	$Term = $_POST['term'];
	$CGPA= $_POST['cgpa'];
    $Attendance = $_POST['attendance'];
    $sql = "INSERT INTO result VALUES('$ID','$Term','$CGPA','$Attendance');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Data Entered Successfully";
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>
