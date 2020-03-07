<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM faculty;";
$res= mysqli_query($link,$sql);
$string = "";
$images_dir = "../images/";
while($row = mysqli_fetch_array($res)){
        $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['subject'].'</td><td>'.
    $row['password'].'</td><td>'.$row['phone'].
    '</td><td>'.$row['email'].'</td><td>'.$row['dob'].
   	'</td><td>'.$row['hiredate'].
    '</td><td>'.$row['address'].'</td><td>'.$row['sex'];
}
?>
<html>
    <head>
     <link rel="stylesheet" href="style.css">
     <style>
div {
    border-radius: 5px;
    background-color: #4DD0E1;
    padding: 20px;
}
</style>
		    
		</head>
    <body>
        <br/>
        <center><h2>Faculty List</h2></center>
        <center>
            <table border="1" id='studentList'>
                <tr>
                   <th>ID</th>
                    <th>Name</th>
                    <th>Subject</th>
                  	
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Hire Date</th>
                   
                    <th>Address</th>
                    <th>Sex</th>
                    
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
