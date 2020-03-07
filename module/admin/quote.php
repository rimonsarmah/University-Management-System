
<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$jd=cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
$date=jddayofweek($jd,1);
$sql = "SELECT * FROM quote where day='$date';";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['quote'];
}
?>
<html>
<head>
<style>
body{
    height:100%;
    background-color:#E0E0E0;
    font-family:"Comic Sans MS";
    font-size:20px;
}
</style>
		
</head>
<body>
<br/>
<center>
    <?php echo $string;?>
</center>
</body>
</html>
