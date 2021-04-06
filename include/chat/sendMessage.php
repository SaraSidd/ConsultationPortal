<?php
include('../config.php');
 
 $m = $_GET['m'];
 $uid = $_GET['uid'];
 $rid = $_GET['rid'];
 $sentat = $_GET['sentat'];
 $sendy = $_GET['sendy'];
  
  echo $m;
  echo $uid;
  echo $rid;
  echo $sentat;
  echo $sendy;
//   die;
  
  //$m = 'hi';
 //$uid = '1';
 //$rid = '2';
 //$sentat = '2222';
 //$sendy = 'Docter';
   
$query = "INSERT INTO `messages` (`id`, `message`, `users_id`, `reciever_id`, `sentat`, `SendBy`) VALUES (NULL, '$m', '$uid', '$rid', CURRENT_TIMESTAMP, '$sendy')";
 //$mysql_qry = "INSERT INTO `messages`(`id`, `message`, `users_id`, `reciever_id`, `sentat`, `SendBy`) VALUES ('', '$m', '$uid', '$rid', '$sentat', '$sendy')";
 

 //$result = mysql_fetch_array(mysql_query($mysql_qry));

	$result = mysqli_query($conn, $query);
print_r($result);
  echo "<h2>Thank you for your Comment!</h2>";

  mysqli_close($conn);
?>