<?php
include('config.php');
 
 $Medicines = $_GET['Medicines'];
 $PatientId = $_GET['PatientId'];
 $DoctorId = $_GET['DoctorId'];
 $sentat = $_GET['sentat'];
 
  $query = "INSERT INTO `messages` (`id`, `message`, `users_id`, `reciever_id`, `sentat`, `SendBy`) VALUES (NULL, '$Medicines', '$PatientId', '$DoctorId', CURRENT_TIMESTAMP, '')";
 //$mysql_qry = "INSERT INTO `messages`(`id`, `message`, `users_id`, `reciever_id`, `sentat`, `SendBy`) VALUES ('', '$Medicines', '$PatientId', '$DoctorId', CURRENT_TIMESTAMP, '')";
 
 //$result = mysql_fetch_array(mysql_query($mysql_qry));

	 mysqli_query($conn, $query);

  echo "<h2>Thank you for your Comment!</h2>";

  mysqli_close($conn);
?>