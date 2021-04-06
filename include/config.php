<?php
// error_reporting(0);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "ebsagrop_ocs";
$prefix = "";
$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
// mysql_select_db($mysql_database, $conn) or die("Could not select database");




?>