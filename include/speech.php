<?php
include('config.php');

//echo "here";
//die;
 
 $Medicines = $_GET['Medicines'];
 $PharmacyId = $_GET['PharmacyId'];
 $PatientId = $_GET['PatientId'];
 $DoctorId = $_GET['DoctorId'];
  
 $mysql_qry = "INSERT INTO `prescription`(`PrescriptionId`, `DocId`, `PatientId`, `PharmacyId`, `Medicines`, `Time`, `OrderStatus`) VALUES (Null, '$DoctorId', '$PatientId', '$PharmacyId', '$Medicines', CURRENT_TIMESTAMP, '')";
 
 //$result = mysql_fetch_array(mysql_query($mysql_qry));

	$result = mysqli_query($conn, $mysql_qry);
	//  print_r($result);
	 

  echo "<h2>Thank you for your Comment!</h2>";

  mysqli_close($conn);
?>