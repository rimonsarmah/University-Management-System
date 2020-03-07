<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM exam;";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['stream'].'</td><td>'.$row['subject'].'</td><td>'.$row['date'].
    '</td><td>'.$row['roomno'].'</td><td>'.
    $row['timing'];
}
?>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
     <style>

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
		</head>
    <body >
        <br/>
        <center><h2>Exams Available</h2></center>
        <center>
            <table border="1" id='studentList'>
                <tr>
                   <th>Stream</th>
                    <th>Subject</th>
                    <th>Date</th>
                  	<th>Room No</th>
                    <th>Timing</th>
                    
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
