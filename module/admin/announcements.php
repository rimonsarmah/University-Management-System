<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM announcement;";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
        $string .= '<tr><td>'.$row['uploader'].'</td><td>'.$row['subject'].
    '</td><td>'.$row['date'].'</td><td>'.
    $row['details'];
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
                   <th>Uploaded By</th>
                    <th>Subject</th>
                    <th>Date</th>
                  	<th>Details</th>
                    
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
