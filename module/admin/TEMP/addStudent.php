<?php
include_once('../../service/mysqlcon.php');
$check=$_SESSION['login_id'];
$session=mysqli_query($link,"SELECT name  FROM admin WHERE id='$check' ");
$row=mysqli_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
if(!isset($login_session)){
    header("Location:../../");
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

</style>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/currentDate.js"></script>
        <script src = "JS/newStudentValidation.js"></script>
		</head>
    <body style="background-color:#C9E7F0;">
    <div align="center"><img src="../../source/jnvl.png" height="150" width="150" alt="JNV Golaghat"/></div>
<div align="center"><h1>Jawahar Navodaya Vidyalaya Golaghat</h1></div>
			<br/><br/>
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
            <h2>Student Registration.</h2><hr/>
            <div>
            <form action="#" method="post"onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                    
                        <label for="admNo">Admission No</label>
                        <input id="admNo"type="text" name="admissionNo" placeholder="Enter Admission No">
                        <label for="admYr">Year of Admission</label>
                        <input id="admYr"type="text" name="admissionYear" placeholder="Enter Year of Admission">
                 		<label for="admDate">Date of Admission</label>
                        <input id="admDate"type="text" name="admissionDate" placeholder="(yyyy-mm-dd)">
    		 			<label for="gender">Select Gender</label>
   						<select id="gender" name="gender">
     					<option value="Male">Male</option>
      					<option value="Female">Female</option>
   						</select>
                        <label for="stuName">Student Name</label>
                        <input id="stuName"type="text" name="studentName" placeholder="Enter date Student name">
                        <label for="stuFather">Father's Name</label>
                        <input id="stuFather" type="text" name="studentFather" placeholder="Enter Father's Name">
        				<label for="stuMother">Mother's Name</label>
                        <input id="stuMother" type="text" name="studentMother" placeholder="Enter Mother's Name">
                    	<label for="stuDOB">Student DOB</label>
                        <input id="stuDOB" type="text" name="studentDOB" placeholder="Enter DOB(yyyy-mm-dd)">
                       
    					<label for="location">Select Location</label>
   						<select id="location" name="location">
     					<option value="Rural">Rural</option>
      					<option value="Urban">Urban</option>
   						</select>
                		<label for="stuReligion">Religion</label>
                        <input id="stuReligion" type="text" name="studentReligion" placeholder="Enter Religion">
        				<label for="stuCaste">Caste</label>
                        <input id="stuCaste" type="text" name="studentCaste" placeholder="Enter Caste">
                         <label for="stuAddress">Student Address</label>
                        <input id="stuAddress" type="text" name="studentAddress" placeholder="Enter Address">
                		<label for="stuPhone">Contact No</label>
                        <input id="stuPhone" type="text" name="studentPhone" placeholder="Enter Phone Number">
						<label for="stuEmail">Email ID</label>
                        <input id="stuEmail" type="text" name="studentEmail" placeholder="Enter Email ID">
						<label for="stuBG">Blood Group</label>
                        <input id="stuBG" type="text" name="studentBG" placeholder="Enter Blood Group">
						<label for="stuAdhaar">Adhaar No</label>
                        <input id="stuAdhaar" type="text" name="studentAdhaar" placeholder="Enter Adhaar Number">
						<label for="admClass">Class of Admission</label>
                        <input id="admClass" type="text" name="admissionClass" placeholder="Enter Class of Admission">
						<label for="tcNo">TC No</label>
                        <input id="tcNo" type="text" name="tcNumber" placeholder="Enter TC Number">
						<label for="tcDate">TC Issue Date</label>
                        <input id="tcDate" type="text" name="stutcDate" placeholder="(yyyy-mm-dd)">
						<label for="wtNo">Withdrawal No</label>
                        <input id="wtNo" type="text" name="wtNumber" placeholder="Enter Withdrawal No">
						<label for="wtDate">TC Issue date(W)</label>
                        <input id="wtDate" type="text" name="withdrawalDate" placeholder="(yyyy-mm-dd)">
                    	<label for="fSchool">Name of School attended in class V</label>
                        <input id="fSchool" type="text" name="fifthSchool" placeholder="Enter the name of school">
                        <label for="eSchool">Name of School attended in class VIII</label>
                        <input id="eSchool" type="text" name="eighthSchool" placeholder="Enter the name of school">
                        <label for="tSchool">Name of School attended in class X</label>
                        <input id="tSchool" type="text" name="tenthSchool" placeholder="Enter the name of school"> 
                        <label for="stuRemark">Remark</label>
                        <input id="stuRemark" type="text" name="studentRemark" placeholder="Enter Remark"> 
                        <label for="stuPhoto">Photo of Student</label>
                        <input id="stuPhoto"type="file" name="stuPhoto">
                        <input id="submit" type="submit"  name="submit"value="Submit">
    
            </form>
            </div>
        </center>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $admNo = $_POST['admissionNo'];
    $admYear= $_POST['admissionYear'];
    $admDate = $_POST['admissionDate'];
    $stuGender = $_POST['gender'];
    $stuName = $_POST['studentName'];
    $stuFather = $_POST['studentFather'];
    $stuMother = $_POST['studentMother'];
    $stuDOB = $_POST['studentDOB'];
    $stuLocation = $_POST['location'];
    $stuReligion = $_POST['studentReligion'];
    $stuCaste = $_POST['studentCaste'];
    $stuAddress = $_POST['studentAddress'];
    $stuPhone = $_POST['studentPhone'];
    $stuEmail = $_POST['studentEmail'];
    $stuBG = $_POST['studentBG'];
    $stuAdhaar = $_POST['studentAdhaar'];
    $admClass = $_POST['admissionClass'];
    $tcNo = $_POST['tcNumber'];
    $tcDate = $_POST['stutcDate'];
    $wtNo = $_POST['wtNumber'];
    $wtDate = $_POST['withdrawalDate'];
    $fSchool = $_POST['fifthSchool'];
    $eSchool = $_POST['eighthSchool'];
    $tSchool = $_POST['tenthSchool'];
    $stuRemark = $_POST['studentRemark'];
    $filetmp =$_FILES['stuPhoto']['tmp_name'];
    move_uploaded_file($filetmp,"../images/".$admNo.".jpg");
    $sql = "INSERT INTO bio VALUES('','$admNo','$admYear','$admDate','$stuGender','$stuName','$stuFather','$stuMother','$stuDOB','$stuLocation','$stuReligion','$stuCaste','$stuAddress','$stuPhone','$stuEmail','$stuBG','$stuAdhaar','$admClass','$tcNo','$tcDate','$wtNo','$wtDate','$fSchool','$eSchool','$tSchool','$stuRemark');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Data Entered Successfully";
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
