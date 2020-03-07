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
        
        <br/>
         <center>
            <h2>Please Enter Details</h2><hr/>
            <form action="#" method="post"onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                    
                        <label for="admNo">Enter Admission No:</label>
                        <td><input id="admNo" type="text" name="admissionNo" placeholder="Enter Admission No"></td>
                    
                        <input type="submit" name="submit"value="Submit">
                   
            </form>
            </div>
        </center>
	</body>
</html>  

<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$string='';
if(!empty($_POST['submit'])){
if(isset($_POST['admissionNo']))
{

$sql = "SELECT * FROM bio WHERE admissionno='".$_POST['admissionNo']."';";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['admissionno'].'</td><td>'.$row['dateofadmission'].
    '</td><td>'.$row['gender'].'</td><td>'.$row['studentname'].
    '</td><td>'.$row['studentname'].'</td><td>'.$row['father'].
    '</td><td>'.$row['mother'].'</td><td>'.$row['dob'].
   	'</td><td>'.$row['residencecategory'].'</td><td>'.$row['religion'].
    '</td><td>'.$row['caste'].'</td><td>'.$row['adddress']
    .'</td><td>'.$row['contactno'].'</td><td>'.$row['email'].'</td><td>'.$row['bloodgrp'].
    '</td><td>'.$row['adhaarno'].'</td><td>'.$row['admclass']
    .'</td><td>'.$row['tcno'].'</td><td>'.$row['tcissuedate'].'</td><td>'.$row['withdrawalno'].
    '</td><td>'.$row['tcissuedatew'].'</td><td>'.$row['fifthschool']
    .'</td><td>'.$row['eighthschool'].'</td><td>'.$row['tenthschool'].'</td><td>'.$row['Remark'];
}

$sql = "SELECT * FROM bio WHERE admissionno='".$_POST['admissionNo']."';";
$res= mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res))
{
$admNoo = $row['admissionno'];
$doa = $row['dateofadmission'];
$gndr = $row['gender'];
$name = $row['studentname'];
$fthr = $row['father'];
$mthr = $row['mother'];
$dob = $row['dob'];
$rcat = $row['residencecategory'];
$rlgn = $row['religion'];
$cst = $row['caste'];
$adrs = $row['adddress'];
$cntctno = $row['contactno'];
$email = $row['email'];
$bldgrp = $row['bloodgrp'];
$adhrno = $row['adhaarno'];
$admcls = $row['admclass'];
$tcn = $row['tcno'];
$tcdt = $row['tcissuedate'];
$wthno = $row['withdrawalno'];
$tcdtw = $row['tcissuedatew'];
$fschl = $row['fifthschool'];
$eschl = $row['eighthschool'];
$tschl = $row['tenthschool'];
$rmrk = $row['Remark'];
}
}
}
//}
?>
<html>
    <head>
		    
		</head>
    <body>
			  
			<br/><br/>
				
			  <hr/>
       
        <br/>
       
        <center>
            <h2>Enter New Details</h2><hr/>
            <form action="#" method="post"onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                <table cellpadding="6">
                    <tr>
                        <td>Admission No:</td>
                        <td><input id="admNo" type="text" name="admissionNo" value='<?php if(isset($_POST['admissionNo'])){ echo $admNoo;}?>' placeholder="Enter Admission No"></td>
                    </tr>
                    <tr>
                        <td>Date of Admission:</td>
                        <td><input id="admDate" type="text" name="admissionDate" value='<?php if(isset($_POST['admissionNo'])){ echo $doa;}?>' placeholder="Enter DOA"></td>
                    </tr>
        
                    <tr>
                        <td>Student Name:</td>
                        <td><input id="stuName"type="text" name="studentName" value='<?php if(isset($_POST['admissionNo'])){ echo $name;}?>' placeholder="Enter Name"></td>
                    </tr>
                    
                    <tr>
                        <td>Email:</td>
                        <td><input id="stuEmail" type="text" name="studentEmail" value='<?php if(isset($_POST['admissionNo'])){ echo $email;}?>' placeholder="Enter Email"></td>
                    </tr>
                    <tr>
                        <td>Adhaar No:</td>
                        <td><input id="stuAdhaar" type="text" name="studentAdhaar" value='<?php if(isset($_POST['admissionNo'])){ echo $adhrno;}?>' placeholder="Enter Adhaar No"></td>
                    </tr>
                    <tr>
                        <td>Tc No:</td>
                        <td><input id="tcNo" type="text" name="tcNumber" value='<?php if(isset($_POST['admissionNo'])){ echo $tcn;}?>' placeholder="Enter Tc No"></td>
                    </tr>
                    <tr>
                        <td>TC issue date:</td>
                        <td><input id="tcDate" type="text" name="transferDate" value='<?php if(isset($_POST['admissionNo'])){ echo $tcdt;}?>' placeholder="Enter TC Issue date"></td>
                    </tr>
                    <tr>
                        <td>Withdrawal No:</td>
                        <td><input id="withNo" type="text" name="withdrawalNo" value='<?php if(isset($_POST['admissionNo'])){ echo $wthno;}?>' placeholder="Enter Parent's Phone Number"></td>
                    </tr>
                    <tr>
                        <td>TC issue date(W):</td>
                        <td><input id="wtcDate" type="text" name="wtransferDate" value='<?php if(isset($_POST['admissionNo'])){ echo $tcdtw;}?>' placeholder="Enter Parent's Phone Number"></td>
                    </tr>
                    <tr>
                        <td>Class 8th done from:</td>
                        <td><input id="eSchool" type="text" name="eighthSchool" value='<?php if(isset($_POST['admissionNo'])){ echo $eschl;}?>' placeholder="Enter Parent's Phone Number"></td>
                    </tr>
                    <tr>
                        <td>Class 10th done from:</td>
                        <td><input id="tSchool" type="text" name="tenthSchool" value='<?php if(isset($_POST['admissionNo'])){ echo $tschl;}?>' placeholder="Enter Parent's Phone Number"></td>
                    </tr>
                    <tr>
                        <td>Remark:</td>
                        <td><input id="stuRemark" type="text" name="studentRemark" value='<?php if(isset($_POST['admissionNo'])){ echo $rmrk;}?>' placeholder="Enter Parent's Phone Number"></td>
                    </tr>
                    <tr>
                     <td>Photo of Student</td>
                       <td> <input id="stuPhoto"type="file" name="stuPhoto"></td>
                        </tr>
                        
                        <td><input type="submit" name="submit"value="Submit"></td>
                    </tr>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	if(isset($_POST['admissionNo'])&&isset($_POST['admissionDate'])&&isset($_POST['studentName'])&&isset($_POST['studentEmail'])&&isset($_POST['studentAdhaar'])&&isset($_POST['tcNumber'])&&isset($_POST['transferDate'])&&isset($_POST['withdrawalNo'])&&isset($_POST['wtransferDate'])&&isset($_POST['eighthSchool'])&&isset($_POST['tenthSchool'])&&isset($_POST['studentRemark'])){
	$admno = $_POST['admissionNo'];
	$admdt = $_POST['admissionDate'];
	$name = $_POST['studentName'];
	$em = $_POST['studentEmail'];
	$adhr = $_POST['studentAdhaar'];
	$tcn = $_POST['tcNumber'];
	$tcdt = $_POST['transferDate'];
	$wtn = $_POST['withdrawalNo'];
	$wtdt = $_POST['wtransferDate'];
	$es = $_POST['eighthSchool'];
	$ts = $_POST['tenthSchool'];
	$rm = $_POST['studentRemark'];
	$filetmp =$_FILES['stuPhoto']['tmp_name'];
    move_uploaded_file($filetmp,"../images/".$admno.".jpg");
    $sql = "UPDATE bio set admissionno='$admno',dateofadmission='$admdt',studentname='$name',email='$em',adhaarno='$adhr',tcno='$tcn',tcissuedate='$tcdt',withdrawalno='$wtn',tcissuedatew='$wtdt',eighthschool='$es',tenthschool='$ts',Remark='$rm' WHERE admissionno='$admno';";
    $success = mysqli_query($link,$sql);
    //$sql = "INSERT INTO users VALUES('$stuId','$stuPassword','student');";
    //$success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysqli_error());
    }
    $stuid="SELECT admissionno FROM bio WHERE studentname='$name' AND admissionno='$admno';";
    $idd=mysqli_query($link,$stuid);
	$myid = mysqli_fetch_array($idd);
    $msg = "Data Entered Successfully Updated for Student ID ".$myid['admissionno'];
    echo '<script type="text/javascript">alert("'.$msg.'");</script>';
    echo "\n";

}
}
?>

</body>
</html>


