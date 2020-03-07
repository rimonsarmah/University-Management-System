<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql1 = "SELECT * FROM placement;";
	$res1= mysqli_query($link,$sql1);
	$string1 = "";
	while($row = mysqli_fetch_array($res1)){
    $string1 .= '<tr><td>'.$row['date'].'</td><td>'.$row['company'].'</td><td>'.$row['cutoff'].
    '</td><td>'.$row['stream'];
}
?>
<html>
    <head>
     <style>
  body{
        height:100%;
        background-color:#E0E0E0;
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
.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
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
    background-color: #FFF176;
    color: black;
}
</style>
		
		</head>
    <body>
        <br/>
        <center>
            <table border="1" id='studentList'>
                <tr>
                	<th>Date</th>
                   	<th>Company</th>
                    <th>Cutoff GPA</th>
                    <th>Branch</th>
                </tr>
                 <?php echo $string1;?>
            </table>
        </center>
		</body>
</html>
