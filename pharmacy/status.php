<?php
header('Location:order.php');
include ('config.php');
$id = $_GET['pId'];
$status = $_GET['status'];
if(! $conn){
    die("ERROR: Could not connect. " . mysqli_error());
}
 if($status=="")
 {
$sql = "UPDATE prescription SET OrderStatus='InProcess' WHERE PrescriptionId=$id";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
  else if($status=="InProcess")
 {
	$sql = "UPDATE prescription SET OrderStatus='Completed' WHERE PrescriptionId=$id";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
   else if($status=="Completed")
 {
	$sql = "UPDATE prescription SET OrderStatus='' WHERE PrescriptionId=$id";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
mysqli_close($conn);

?>