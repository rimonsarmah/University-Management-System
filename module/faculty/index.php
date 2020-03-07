<?php
    include_once('main.php');
    include_once('../../service/mysqlcon.php');
    $today=date("Y-m-d");
    $sql1 = "DELETE FROM leavetable where date<'$today';";
    $success1 = mysqli_query($link,$sql1);
    if(!$success1) {
        die('Could not delete leave details: '.mysql_error());
    }
    $string="";
    $sql = "SELECT * FROM admin where name='$loged_user_name';";
	$res= mysqli_query($link,$sql);
	$images_dir = "../images/";
	while($row = mysqli_fetch_array($res))
	{
		$picname = $row['id'];
		$string .= 	"<img src='".$images_dir.$picname.".jpg' alt='$picname' width='150' height='150'>";
	}
?>
<!DOCTYPE html>
<html>
<head><title>UMS Dashboard</title>
<style>
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
body{
        height:100%;
        background-color:#E0E0E0;
    }
a:link, a:visited {
background-color: #FFB74D;
color: white;
padding: 14px 25px;
text-align: center;
text-decoration: none;
display: inline-block;
}

a:hover, a:active {
  background-color: green;
}
img{
	border-radius:50%;
}
.grid-container {
  display: grid;
  grid-template-columns: 50% 50% ;
  grid-gap: 10px;
  padding: 10px;
}

.grid-container > div {
  text-align: center;
  font-size: 20px;
}
.divi{
background-color:#64B5F6;
padding:5px;
border-radius:5px;
}

</style>
</head>
<body>
<center><img src="unilogo.png" style="height:250px;width:250px;border-radius:50%;"></center><br>
<center><h1>University of Elite</h1>
<?php echo $string;?>
<h2>Welcome <?php echo ucfirst($loged_user_name);?></h2>
<p id="demo"></p>

<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>

<a href="home.php">Continue</a>
<a href="logout.php">Logout</a></center>
<div class="grid-container">
  <div>
  	<div class="divi">
  		<h3>Quote</h3>
  		<iframe height="200px" width="100%" src="quote.php"></iframe>
  	</div>
  </div>
  <div>
  	<div class="divi">
  		<h3>Important Dates</h3>
  	 	<iframe height="200px" width="100%" src="importantdates.php"></iframe>
  	</div>
  </div>
  <div>
  	<div class="divi">
  		<h3>Placement Drives</h3>
  	 	<iframe height="200px" width="100%" src="placement.php"></iframe>
  	</div>
  </div>  
  <div>
  	<div class="divi">
  		<h3>Previous Result Analysis</h3>
  	 	<iframe height="200px" width="100%" src="result.php"></iframe>
  	</div>
  </div>  
</div>
</body>