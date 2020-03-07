<?php
include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #187;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
.alert {
    padding: 20px;
    background-color: #114336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;}
    .footer {
    background-color: #f1f1f1;
    padding: 10px;
    }
    .content {
    background-color: #ddd;
    padding: 10px;
    height: 550px; /* Should be removed. Only for demonstration */
}

</style>
<script src = "JS/login_logout.js"></script>
</head>
<body style="background-color:#C9E7F0;">

<div align="center"><img src="../../source/jnvl.png" height="150" width="150" alt="JNV Golaghat"/></div>
<div align="center"><h1>Jawahar Navodaya Vidyalaya Golaghat</h1></div>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><strong>Welcome!</strong> Office</center>
  </div>
<ul>
<li>
						    <a class ="active" href="index.php">Home</a>
						    <a class ="active" href="studentDetails.php">Student Details</a>
						    <li class ="dropdown">
						    <a href="javascript:void(0)" class="dropbtn">Manage Student Data</a>
						    <div class="dropdown-content">
      							<a href="addStudent.php">Add Student</a>
     							<a href="viewStudent.php">View Student</a>
      							<a href="updateStudent.php">Update Student</a>
      							<a href="deleteStudent.php">Delete Student</a>
    							</div></li>
    							
					
								<li style="float:right"><a class ="active" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						   		<li style="float:right"><a class ="active" href="changepassword.php">Change Password</a></li>
						    
								
								
						</li>
				</ul>
				<div class="content">
 <center><h1>Version 1.0</h1></center>
</div>
				<div class="footer">
  <p><div align="center">© Rimon Cloud. All rights reserved.</div></p>
</div>
	
</body>
</html>
