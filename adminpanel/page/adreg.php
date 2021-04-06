<?php 
header('Location:adminlog.php');
include ('config.php');

 
$strSQL = "INSERT INTO admin ";
$strSQL .="(Name,Cnic,Mobile,UserName,Password) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["aname"]."','".$_POST["cnic"]."' ";
$strSQL .=",'".$_POST["number"]."','".$_POST["uname"]."','".$_POST["password"]."') ";


if(mysqli_query($conn, $strSQL)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

















?>