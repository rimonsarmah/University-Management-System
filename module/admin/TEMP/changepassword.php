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
            <h2>Change Password</h2><hr/>
            <div>
            <form action="#" method="post"onsubmit="return newStudentValidation();" enctype="multipart/form-data">
               
                    
                   
                       <label for="stuSess">Current Password</label>
                        <input id="curPass" type="text" name="curPassword" placeholder="Enter Current Password">
                    
                        <label for="stuSess">New Password</label>
                        <input id="newPass" type="text" name="newPassword" placeholder="Enter New Password">
                    	
                    	<label for="stuSess">Confirm New Password</label>
                        <input id="confnewPass" type="text" name="confnewPassword" placeholder="Again enter New Password">
                       
                      
                       
                       <input type="submit" name="submit"value="Submit">
                    
                
            </form>
            </div>
        </center>
	</body>
</html>  
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	if(isset($_POST['curPassword'])&&isset($_POST['newPassword'])&&isset($_POST['confnewPassword'])){
	$curPass = $_POST['curPassword'];
    $newPass = $_POST['newPassword'];
	$confnewPass = $_POST['confnewPassword'];
	$sql="SELECT password FROM users WHERE userid='office';";
    $res=mysqli_query($link,$sql);
	$row = mysqli_fetch_array($res);
	if($newPass==$confnewPass && $curPass==$row['password']){
    $sql = "UPDATE users SET password='$confnewPass' where userid='office'";
    $success = mysqli_query($link,$sql);
    $sql1 = "UPDATE admin SET password='$confnewPass' where id='office'";
    $success1 = mysqli_query($link,$sql1);
    if(!$success) {
        die('Could not enter data: '.mysqli_error());
    }
    
    $msg = "Password Successfully Changed";
    echo '<script type="text/javascript">alert("'.$msg.'");</script>';
    echo "\n";
    }
    else{
    $msg = "Password Unmatched";
    echo '<script type="text/javascript">alert("'.$msg.'");</script>';
    }

}
}
?>