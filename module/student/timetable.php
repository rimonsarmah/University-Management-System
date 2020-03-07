<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM timetable;";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['day'].'</td><td>'.$row['subject'].'</td><td>'.$row['roomno'].'</td><td>'.$row['timing'];
}
?>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    		</head>
        <center>
            <table border="1" id='studentList'>
                <tr>
                   <th>Day</th>
                    <th>Subject</th>
                    <th>Room No</th>
                  	<th>Timing</th>
                    
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
