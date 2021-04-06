<?php
include('config.php');
 
 $PatientId = $_GET['PatientId'];
 $Url = $_GET['Url'];
 

 $mysql_qry = "INSERT INTO files(`Fid`, `PatientId`, `Url`, `Name`) VALUES ('', '$PatientId', '$Url', '')";
 
 //$result = mysql_fetch_array(mysql_query($mysql_qry));
 
 mysqli_query($conn, $mysql_qry);

  echo "<h2>Thank you for your Comment!</h2>";

  mysqli_close($conn);
?>