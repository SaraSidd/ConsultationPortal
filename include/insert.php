<?php
include('config.php');
 
 $Name = $_GET['Name'];
 $Age = $_GET['Age'];
 $Gender = $_GET['Gender'];
 $Qualification = $_GET['Qualification'];
 $Cnic = $_GET['Cnic'];
 $Email = $_GET['Email'];
 $Password = $_GET['Password'];
 $Mobile = $_GET['Mobile'];

 
 
 
 $mysql_qry = "INSERT INTO `doctor`(`DocId`, `Name`, `Age`, `Gender`, `Qualification`, `Cnic`, `Email`, `Password`, `Mobile`, `Status`) VALUES ('', '$Name','$Age','$Gender','$Qualification','$Cnic','$Email','$Password','$Mobile','')";
 
 //$result = mysql_fetch_array(mysql_query($mysql_qry));

	 mysql_query($mysql_qry);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
?>