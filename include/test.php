<?

include('config.php');

 $result = mysql_query("SELECT Name from pharmacy");
 $rows = array();
   while($r = mysql_fetch_assoc($result)) {
     $rows['Name'][] = $r;
   }

 print json_encode($rows);


                                    
?>