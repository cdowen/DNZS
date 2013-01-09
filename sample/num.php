<?php
$time = $_GET['date'];
if (!is_numeric($time))
	die();
$conn = mysql_connect('localhost', 'dnzsuser', '123456');
mysql_select_db('DNZS');
$result = mysql_query("SELECT `time` FROM `appointment` WHERE time<=$time");
$sum = mysql_num_rows($result);
echo $sum;
?>