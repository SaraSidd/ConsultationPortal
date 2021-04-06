<?php

include('config.php');

 $result = mysqli_query($conn, "SELECT Docid, Name, Timings, Days, Rating from doctor where Rating BETWEEN 3 AND 5 ORDER BY Rating DESC");
 $rows = array();
   while($r = $result->fetch_assoc()) {
     $rows[] = $r;
   }

 print json_encode($rows);

//mysql_close($conn);
										
                                    
?>