<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Add Student</title>
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
   <center> <h1>Change Password</h1> </center>
    </div>
    </div>
 <form action="#" method="post" enctype="multipart/form-data">
               
                    
               <center>    
                        <input id="pw" type="password" name="curPassword" placeholder="Enter Current Password">
                    	<br>
                        <input id="newPass" type="password" name="newPassword" placeholder="Enter New Password">
                    	<br>
                        <input id="confnewPass" type="password" name="confnewPassword" placeholder="Again enter New Password">
                       <br>
                      
                       <input type="submit" name="submit"value="Submit">
                    
                
            </form>
            </div>
        </center>
        </form>
</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
	if(isset($_POST['curPassword'])&&isset($_POST['newPassword'])&&isset($_POST['confnewPassword'])){
	$curPass = $_POST['curPassword'];
    $newPass = $_POST['newPassword'];
	$confnewPass = $_POST['confnewPassword'];
	$sql="SELECT password FROM users WHERE userid='$loged_user_id';";
    $res=mysqli_query($link,$sql);
	$row = mysqli_fetch_array($res);
	if($newPass==$confnewPass && $curPass==$row['password']){
    $sql = "UPDATE users SET password='$confnewPass' where userid='$loged_user_id'";
    $success = mysqli_query($link,$sql);
    $sql1 = "UPDATE faculty SET password='$confnewPass' where id='$loged_user_id'";
    $success1 = mysqli_query($link,$sql1);
    if(!$success) {
        die('Could not enter data: '.mysqli_error());
    }
    include ('../../service/mysqlcon.php');
	session_start();
	session_destroy(1);
	mysqli_close($link);
	header("Location: ../../");
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