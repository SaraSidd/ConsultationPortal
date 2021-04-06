<?php
include('config.php');

	$D_id = $_GET['did'];
	
 $result = mysqli_query($conn, "SELECT * FROM doctor WHERE DocId= $D_id");
 $rows = array();
   while($r = $result->fetch_assoc()) {
     $rows[] = $r;
   }



 print json_encode($rows);


//mysql_close($conn);
						
?>