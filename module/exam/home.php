<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>UMS Dashboard</title>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 40%;
  padding: 5px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}
.rw {  
  display: flex;
  flex-wrap: wrap;
}

.side {
  flex: 20%;
  padding: 20px;
}
.main {
  flex: 80%;
  padding: 20px;
}
body{
        height:100%;
        background-color:purple;
        background-image: linear-gradient(to right, purple, white);
    }
a:link, a:visited {
background-color: #f44336;
color: white;
padding: 14px 25px;
text-align: center;
text-decoration: none;
display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
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
<a href="addannouncement.php">Add Announcement</a>
<a href="changepw.php">Change Password</a>
<a href="logout.php">Logout</a></center>
<br><br><br>
<div class="rw">
<div class="side">
   
        <h2>Profile</h2>
        Name: <?php echo ucfirst($loged_user_name);?>
</div>
<div class="main">
    <center>
<a class="active" href="timetable.php" target="iframe_a" style="background-color:green;">Today's Time Table</a>
<a class="active" href="addexam.php" target="iframe_a" style="background-color:green;">Add Examinations</a>
<a class="active" href="exam.php" target="iframe_a" style="background-color:green;">View Examinations</a>
<a class="active" href="addresult.php" target="iframe_a" style="background-color:green;">Add Result</a>
<iframe height="300px" width="100%" name="iframe_a" src="timetable.php"></iframe>
</div>
</div>
</div>
<center>
<h2>Announcements</h2>
<iframe height="300px" width="100%" src="announcements.php">
  <p>Your browser does not support iframes.</p>
</iframe>
<div class="footer">
  <h2>Developed By</h2>
</div>
</body>
</html>