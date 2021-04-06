<?php
include('config.php');

	$P_id = $_GET['PatientId'];
	//$P_id = 1;
	
 $result = mysqli_query($conn, "SELECT * FROM patient WHERE PatientId= $P_id");
 $rows = array();
   while($r = $result->fetch_assoc()) {
     $rows[] = $r;
   }



 print json_encode($rows);


//mysql_close($conn);
						
?>