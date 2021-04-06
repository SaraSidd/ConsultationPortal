<?php
include('config.php');
 
 $Medicines = $_GET['Medicines'];
 $PharmacyId = $_GET['PharmacyId'];
 $PatientId = $_GET['PatientId'];
 $DoctorId = $_GET['DoctorId'];
  
 $mysql_qry = "INSERT INTO `prescription`(`PrescriptionId`, `DocId`, `PatientId`, `PharmacyId`, `Medicines`, `Time`, `OrderStatus`) VALUES ('', '$DoctorId', '$PatientId', '$PharmacyId', '$Medicines', '', '')";
 
 //$result = mysql_fetch_array(mysql_query($mysql_qry));

	 mysqli_query($conn, $mysql_qry);

  echo "<h2>Thank you for your Comment!</h2>";

  mysqli_close($con);
?>