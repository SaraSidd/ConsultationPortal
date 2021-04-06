<?php

 header('content-type: application/json');
 include('include/config.php');
 
 $sql = "SELECT PharmacyId, Name FROM pharmacy ";
 $result = mysql_query($sql);
 
 while($row = mysql_fetch_assoc($result))
 {
	 $output[] = $row;
 }
 
 echo json_encode($output);
 print(json_encode($output));



?>