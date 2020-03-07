<?php
    include_once('main.php');
    $string="";
    $sql = "SELECT * FROM student where name='$loged_user_name';";
	$res= mysqli_query($link,$sql);
	$images_dir = "../images/";
	while($row = mysqli_fetch_array($res))
	{
		$picname = $row['id'];
		$string .= 	"<img src='".$images_dir.$picname.".jpg' alt='$picname' width='180' height='180'>";
	}
		
?>
<!DOCTYPE html>
<html>
<head><title>UMS Home</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="row">
  <div class="column">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="unilogo.png" style="height:100px;width:100px;border-radius:50%;">
    </div>
    <div class="column">
    <h1>University of Elite</h1>
    </div>
    </div>
  
  <center>
<a href="index.php">Dashboard</a>
<a href="changepw.php">Change Password</a>
<a href="logout.php">Logout</a></center>
<br><br><br>
<div class="rw">
<div class="side">
   
        <?php echo $string;?><br>
        <a href="profile.php" style="background-color:purple;">
        <p style="color:white;">
        Name: <?php echo ucfirst($loged_user_name);?>
        <br>
        Gender: <?php echo ucfirst($sex);?>
        <br>
        Stream: <?php echo ucfirst($stream);?>
        <br>
        DOB: <?php echo ucfirst($dob);?>
        <br>
        Phone: <?php echo ucfirst($phone);?></p></a>
</div>
<div class="main">
    <center>
<a class="active" href="timetable.php" target="iframe_a" style="background-color:#FFB74D;">Today's Time Table</a>
<a class="active" href="exam.php" target="iframe_a" style="background-color:#FFB74D;">Examination</a>
<a class="active" href="viewleave.php" target="iframe_a" style="background-color:#FFB74D;">Teacher On Leave</a></center>
<iframe height="300px" width="100%" name="iframe_a" src="timetable.php"></iframe>
</div>
</div>
</div>
<center>
<h2>Announcements</h2>
<iframe height="300px" width="100%" src="announcements.php">
  <p>Your browser does not support iframes.</p>
</iframe>

</body>
</html>