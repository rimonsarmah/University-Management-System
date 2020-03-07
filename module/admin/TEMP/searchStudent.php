<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$searchKey = $_GET['key'];
$images_dir = "../images/";
$string = "<tr>
   					<th>Serial No</th>
                    <th>Admission No</th>
                    <th>Year of Admission</th>
                    <th>Date of Admission</th>
                  
                    <th>Student Name</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>DOB</th>
                   
                    <th>Religion</th>
                    <th>Caste</th>
                    
                    <th>Contact No</th>
                    <th>Email ID</th>
                    <th>Blood Group</th>
                    <th>Adhaar No</th>
                    
                    <th>Remark</th>
</tr>";
$sql = "SELECT * FROM bio WHERE adhaarno like '$searchKey%' OR studentname like '$searchKey%';";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    
   $string .= '<tr><td>'.$row['serialno'].'</td><td>'.$row['admissionno'].'</td><td>'.$row['admissionyear'].
    '</td><td>'.$row['dateofadmission'].'</td><td>'.
    $row['studentname'].'</td><td>'.$row['father'].
    '</td><td>'.$row['mother'].'</td><td>'.$row['dob'].
   	'</td><td>'.$row['religion'].
    '</td><td>'.$row['caste'].'</td><td>'.$row['contactno'].'</td><td>'.$row['email'].'</td><td>'.$row['bloodgrp'].
    '</td><td>'.$row['adhaarno'].'</td><td>'.$row['Remark'];
}
echo $string;
?>
