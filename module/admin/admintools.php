<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Admin Tools</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="row">
  <div class="column">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="unilogo.png" style="height:100px;width:100px;border-radius:50%;">
    </div>
    <div class="column">
    <h1>University of Elite</h1>
    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin Tools</h2>
    </div>
    </div>
  
  <center>
<a href="index.php">Dashboard</a>
<a href="home.php">Home</a>
<a href="changepw.php">Change Password</a>
<a href="admintools.php">Admin Tools</a>
<a href="logout.php">Logout</a></center>
<br><br><br>
<div class="rw">
<div class="side">
   
        <h2>Profile</h2>
        Name: <?php echo ucfirst($loged_user_name);?>
</div>
<div class="main">
    <center>
<a class="active" href="addstudent.php" target="iframe_a" style="background-color:green;">Add Student</a>
<a class="active" href="viewstudent.php" target="iframe_a" style="background-color:green;">View Students</a>
<a class="active" href="deletestudent.php" target="iframe_a" style="background-color:green;">Delete Student</a>
<a class="active" href="addfaculty.php" target="iframe_a" style="background-color:green;">Add Faculty</a>
<a class="active" href="viewfaculty.php" target="iframe_a" style="background-color:green;">View Faculties</a>
<a class="active" href="deletefaculty.php" target="iframe_a" style="background-color:green;">Remove Faculty Details</a>
<a class="active" href="addimpdates.php" target="iframe_a" style="background-color:green;">Add Dates</a></center>
<iframe height="500px" width="100%" name="iframe_a" src="addstudent.php"></iframe>
</div>
</div>
</div>

</body>