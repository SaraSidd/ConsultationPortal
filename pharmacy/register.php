<?php
 Header( 'Location: login.php');
 include('config.php');
/*echo $_POST["pname"];
echo $_POST["uname"];
echo $_POST["password"];
echo $_POST["address"];
echo $_POST["number"];

die();*/


	
   
	$strSQL = "INSERT INTO pharmacy ";
	$strSQL .="(Name,Username,Password,Address,Phone) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["pname"]."','".$_POST["uname"]."','".$_POST["password"]."' ";
	$strSQL .=",'".$_POST["address"]."','".$_POST["number"]."') ";
      
   mysql_select_db($mysql_database);
   $retval = mysql_query( $strSQL, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
  // echo "Registered successfully\n";
   
   mysql_close($conn);
?>



