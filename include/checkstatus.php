<?php 
//session_start();
include('config.php');

$PatientId = $_GET["PatientId"];

$sql = "SELECT OrderStatus FROM prescription WHERE PatientId=$PatientId";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result))
{

      $status = $row['OrderStatus'];
	  if($status == "Completed")
	  {
		  
	  }else
	  {
		echo $status;
	  }
}

?>