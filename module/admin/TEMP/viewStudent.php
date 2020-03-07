<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM bio;";
$res= mysqli_query($link,$sql);
$string = "";
$images_dir = "../images/";
while($row = mysqli_fetch_array($res)){
        $string .= '<tr><td>'.$row['serialno'].'</td><td>'.$row['admissionno'].
    '</td><td>'.$row['dateofadmission'].'</td><td>'.
    $row['studentname'].'</td><td>'.$row['father'].
    '</td><td>'.$row['mother'].'</td><td>'.$row['dob'].
   	'</td><td>'.$row['religion'].
    '</td><td>'.$row['caste'].'</td><td>'.$row['contactno'].'</td><td>'.$row['email'].'</td><td>'.$row['bloodgrp'].
    '</td><td>'.$row['adhaarno'].'</td><td>'.$row['Remark'];
}
?>
<html>
    <head>
     <style>
    body {font-family: Arial, Helvetica, sans-serif;}
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
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
#studentList {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#studentList td, #studentList th {
    border: 1px solid #ddd;
    padding: 8px;
}

#studentList tr:nth-child(even){background-color: #f2f2f2;}

#studentList tr:hover {background-color: #ddd;}

#studentList th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchStudent.js"></script>
		</head>
    <body style="background-color:#C9E7F0;">
			  <div align="center"><img src="../../source/jnvl.png" height="150" width="150" alt="JNV Golaghat"/></div>
<div align="center"><h1>Jawahar Navodaya Vidyalaya Golaghat</h1></div>
			<br><br>
			<center>
				<ul>
				    <li>
						    <a class ="active" href="index.php">Home</a>
	
								
								<li style="float:right"><a class ="active" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    
						
						</li>
				</ul>
				</center>
			  <hr/>
        <center>
            
                    <label for="searchId"><b>Search By Adhaar No Or Name: </b></label>
                    <input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getStudent(this.value);">
              
        </center>
        <br/>
        <center><h2>Students List</h2></center>
        <center>
            <table border="1" id='studentList'>
                <tr>
                   <th>Serial No</th>
                    <th>Admission No</th>
                    <th>Date of Admission</th>
                  
                    <th>Student Name</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>DOB</th>
                   
                    <th>Religion</th>
                    <th>Caste</th>
                    
                    <th>Contact No</th>
                    <th>Email ID</th>
                    <th>Blood Group</th>
                    <th>Adhaar No</th>
                    
                    <th>Remark</th>
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
