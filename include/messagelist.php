<?php

include('config.php');

$rid = $_GET['rid'];

 $result = mysqli_query($conn, "SELECT users_id, message from messages where reciever_id = $rid");
 $rows = array();
   while($r = $result->fetch_assoc()) {
     $rows[] = $r;
   }



 print json_encode($rows);


//mysql_close($conn);
										
                                    
?>