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
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
<center>
<table>
<tr>
	<th><img src="unilogo.png" style="height:100px;width:100px;border-radius:50%;"></th>
 <th> <h1>University of Elite</h1></th>
  </tr>
  </table>
  </center>
</div>

<div class="topnav">
  <a href="index.php">Dashboard</a>
  <a href="changepw.php">Change Password</a>
  <a href="logout.php" style="float:right">Logout</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
    <center>
    <div class="topnav">
      <a class="active" href="timetable.php" target="iframe_a">Today's Time Table</a>
	<a class="active" href="exam.php" target="iframe_a">Examination</a>
	<a class="active" href="viewleave.php" target="iframe_a">Teacher On Leave</a></center>
	<iframe height="300px" width="100%" name="iframe_a" src="timetable.php"></iframe>
	</div>
	</center>
    </div>
    <div class="card">
      <h2>Announcements</h2>
<iframe height="300px" width="100%" src="announcements.php">
  <p>Your browser does not support iframes.</p>
</iframe>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
