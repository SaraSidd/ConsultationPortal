<?php
include('config.php');
 
 $Name = $_GET['Name'];
 $Age = $_GET['Age'];
 $Gender = $_GET['Gender'];
 $Mobile = $_GET['Mobile'];
 $Address = $_GET['Address'];
 $Cnic = $_GET['Cnic'];
 $Email = $_GET['Email'];
 $Password = $_GET['Password'];
 
 
 
 /**$strSQL = "INSERT INTO patient ";
	$strSQL .="(PatientId,Name,Age,Gender,Mobile,Address,Cnic,Email,Delivery,Password,Status) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_GET['Name']."','".$_GET["uname"]."','".$_POST["password"]."' ";
	$strSQL .=",'".$_POST["address"]."','".$_POST["number"]."') ";
      
   mysql_select_db($mysql_database);
   $retval = mysql_query( $strSQL, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
  // echo "Registered successfully\n";**/
 
 
 $mysql_qry = "INSERT INTO patient(`PatientId`, `Name`, `Age`, `Gender`, `Mobile`, `Address`, `Cnic`, `Email`, `Delivery`, `Password`, `Status`) VALUES ('','$Name','$Age','$Gender','$Mobile','$Address','$Cnic','$Email','','$Password','')";
 
 //$result = mysql_fetch_array(mysql_query($mysql_qry));
 
 mysql_query($mysql_qry);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($conn);
?>