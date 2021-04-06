<?php

include('config.php');

 $result = mysqli_query($conn, "SELECT pharmacyId, Name, Rating from pharmacy where Rating BETWEEN 3 AND 5 ORDER by Rating DESC");
 $rows = array();
   while($r = mysqli_fetch_assoc($result)) {
     $rows[] = $r;
   }



 print json_encode($rows);


mysqli_close($conn);
										
                                    
?>