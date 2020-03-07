<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Delete Faculty</title>
 <link rel="stylesheet" href="style.css">
<style>


div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
</head>
<body>
   <center> <h1>Delete Faculty</h1> </center>
<form action="#" method="post" enctype="multipart/form-data">
    <div>
    Enter Faculty ID: 
    <input type="text" name="fid">
    <input type="submit" name="submit">
</div>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	$facID = $_POST['fid'];
    $sql = "DELETE FROM faculty where id='$facID';";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $sql1 = "DELETE FROM users where userid='$facID';";
    $success1 = mysqli_query($link,$sql1);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    $message= "Successfully Deleted. ID: ".$facID;
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>