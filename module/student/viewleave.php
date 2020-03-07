<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM leavetable;";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['leaveid'].'</td><td>'.$row['facultyid'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['span'];
}
?>
<html>
    <head>
     <link rel="stylesheet" href="style.css">
		</head>
    <body>
        <br/>
        <center>
            <table border="1" id='studentList'>
                <tr>
                   <th>Leave ID</th>
                   <th>Faculty ID</th>
                   <th>Name</th>
                    <th>Date</th>
                    <th>Span</th>
                    
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
