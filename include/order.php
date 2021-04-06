<?php

include('config.php');
 //ye bhjna hai abh
 //$Medicines = $_GET['Medicines'];
 //$DoctorId = $_GET['DoctorId'];
 //$PatientId = $_GET['PatientId'];
 //$PharmacyId = $_GET['PharmacyId'];
 
  
 /*$mysql_qry = "INSERT INTO [prescription](`DocId`, `PatientId`, `PharmacyId`, `Medicines`, [`Time`], `[Status`]) VALUES (1,  1, 2, 'safsgasdgasdgsdgsd', '','no')";
 
 //$result = mysql_fetch_array(mysql_query($mysql_qry));
if(mysql_query($mysql_qry))
	 {
		 
		echo "<h2>Thank you for your Comment!</h2>";
	 } else
	 {
		 echo "kch nai hua";
	 }*/
	 

	 
	 
	 
	  if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
	$strSQL = "INSERT INTO prescription ";
	$strSQL .="(PrescriptionId, DocId, PatientId, PharmacyId, Medicines, Time, OrderStatus) ";
	$strSQL .="VALUES ";
	$strSQL .="('', 1, 2, 3 ";
	$strSQL .=",'abcdrel','','') ";
      
   //mysql_select_db($mysql_database);
   $retval = mysql_query( $strSQL, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }else
   {
	   Echo "hgya kch";
   }
	 
	 
  mysql_close($conn);




?>