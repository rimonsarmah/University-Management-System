<?php
include_once('main.php');

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
        
        <br/>
         <center>
            <h2>Please Enter Details</h2><hr/>
            <div>
            <form action="#" method="post"onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                
                    
                    
                        <label for="admNo">Admission No:</label>
                        <input id="admNo" type="text" name="admissionNo" placeholder="Enter Admission No">
                  
                        <input type="submit" name="submit"value="Submit">
                   
            </form>
            </div>
        </center>
	</body>
</html>  
<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$string="";
if(!empty($_POST['submit']))
{
	if(isset($_POST['admissionNo']))
	{
		
    	$sql = "SELECT * FROM bio where admissionno='".$_POST['admissionNo']."';";
		$res= mysqli_query($link,$sql);
		$images_dir = "../images/";
		while($row = mysqli_fetch_array($res))
		{
		$picname = $row['admissionno'];
		$string .= 	"<img src='".$images_dir.$picname.".jpg' alt='$picname' width='150' height='150'>";
		}
		
	}
}
?>
<html>
        <center><h2>Photo of the Student</h2></center>
        <center>
            
                <?php echo $string;?>
           
            
        
        </center>
        
        
		</body>
	</html>
<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if(isset($_POST['admissionNo']))
{
$sql = "SELECT * FROM bio WHERE admissionno='".$_POST['admissionNo']."';";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['studentname'].'</td><td>'.$row['gender'].
    '</td><td>'.$row['father'].'</td><td>'.$row['mother'].
    '</td><td>'.$row['dob'].'</td><td>'.$row['religion'].
    '</td><td>'.$row['caste'].'</td><td>'.$row['bloodgrp'].
   	'</td><td>'.$row['residencecategory'];
}
}
?>
<html>
    <head>
		    
		</head>
    <body>
			  
			<br/><br/>
				
			  <hr/>
       
        <br/>
        <center><h2>Bio</h2></center>
        <center>
            <table border="1" id='studentList'>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>DOB(YYYY-MM-DD)</th>
                    <th>Religion</th>
                    <th>Caste</th>
                    <th>Blood Group</th>
                    <th>School Location</th>
                    
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if(isset($_POST['admissionNo']))
{
$sql = "SELECT * FROM bio WHERE admissionno='".$_POST['admissionNo']."';";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['adddress'].'</td><td>'.$row['contactno'].
    '</td><td>'.$row['email'].'</td><td>'.$row['adhaarno'];
}
}
?>
<html>
    <head>
		    
		</head>
    <body>
			  
			<br/><br/>
				
			  <hr/>
       
        <br/>
        <center><h2>Contact Details</h2></center>
        <center>
            <table border="1" id='studentList'>
                <tr>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>Adhaar No</th>
                    
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if(isset($_POST['admissionNo']))
{
$sql = "SELECT * FROM bio WHERE admissionno='".$_POST['admissionNo']."';";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['admissionno'].'</td><td>'.$row['admissionyear'].'</td><td>'.$row['dateofadmission'].
    '</td><td>'.$row['admclass'].'</td><td>'.$row['tcno'].
    '</td><td>'.$row['tcissuedate'].'</td><td>'.$row['withdrawalno'].
    '</td><td>'.$row['tcissuedatew'].'</td><td>'.$row['Remark'];
}
}
?>
<html>
    <head>
		    
		</head>
    <body>
			  
			<br/><br/>
				
			  <hr/>
       
        <br/>
        <center><h2>Official Details</h2></center>
        <center>
            <table border="1" id='studentList'>
                <tr>
                    <th>Admission No</th>
                    <th>Year of Admission</th>
                    <th>DOA(YYYY-MM-DD)</th>
                    <th>Class of Adm</th>
                    <th>TC No</th>
                    <th>TC Issue Date</th>
                    <th>Withdrwawal No</th>
                    <th>TC Issue Date(W)</th>
                    <th>Remark</th>
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if(isset($_POST['admissionNo']))
{
$sql = "SELECT * FROM bio WHERE admissionno='".$_POST['admissionNo']."';";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['fifthschool'].'</td><td>'.$row['eighthschool'].
    '</td><td>'.$row['tenthschool'];
}
}
?>
<html>
    <head>
		    
		</head>
    <body>
			  
			<br/><br/>
				
			  <hr/>
       
        <br/>
        <center><h2>School Details</h2></center>
        <center>
            <table border="1" id='studentList'>
                <tr>
                    <th>5th Class</th>
                    <th>8th Class</th>
                    <th>10th Class</th>
                    
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>



