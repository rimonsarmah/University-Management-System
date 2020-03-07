<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script src = "JS/login_logout.js"></script>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #187;
}

li {
    float: center;
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
</style>
		</head>
    <body style="background-color:powderblue;">
			  <div class="header"><h1>Student Record</h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
			<div align="center">
				<ul>
				    <li class ="dropdown">
						    <a class ="active" href="index.php">Home</a>
						    <div class="dropdown-content">
      							<a href="#">Link 1</a>
     							<a href="#">Link 2</a>
      							<a href="#">Link 3</a>
    							</div></li>
    							<li>
								<a class ="active" href="manageStudent.php">Manage Student</a>
    							<a href="javascript:void(0)" class="dropbtn">Dropdown</a>
								
								<a class ="active" href="marks.php">Marks</a>
								<a class ="active" href="attendance.php">Attendance</a>
								<a class ="active" href="monthly.php">Monthly Mark</a>
								
								
								
						</li>
				</ul>
				</div>
				<div align="center">
								<h4>Hi!admin <?php echo $check." ";?></h4>
								    <a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
			  <hr/>
		</body>
</html>
