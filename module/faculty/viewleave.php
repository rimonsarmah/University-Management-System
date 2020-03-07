<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM leavetable where facultyid='$loged_user_id';";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['leaveid'].'</td><td>'.$row['date'].'</td><td>'.$row['span'].
    '</td><td>'.$row['status'];
}
?>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
		</head>
    <body>
        <br/>
        <center><h2>Applied Leaves</h2></center>
        <center>
            <table border="1" id='studentList'>
                <tr>
                   <th>Leave ID</th>
                    <th>Date</th>
                    <th>Span</th>
                  	<th>Status</th>
                    
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
