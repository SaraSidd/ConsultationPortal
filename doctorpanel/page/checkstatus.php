<?php 
session_start();
include('config.php');
$id = $_GET["Pid"];
$sql = "SELECT OrderStatus FROM prescription WHERE PatientId=1 ";
$result = mysqli_query($conn, $sql) or die(mysqli_error());
while($row = mysqli_fetch_array($result))
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