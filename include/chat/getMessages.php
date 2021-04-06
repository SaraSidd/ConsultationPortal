<?php

include('../config.php');

$uid = $_GET['uid'];
$rid = $_GET['rid'];


 $result = mysqli_query($conn, "SELECT * FROM `messages` WHERE `users_id` = '$uid' AND `reciever_id` = '$rid'");
 
 $rows = array();
   while($r = $result->fetch_assoc()) {
     $rows[] = $r;
   }



 print json_encode($rows);


mysqli_close($conn);
										
                                    
?>