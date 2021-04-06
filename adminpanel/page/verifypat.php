<?php
header('Location:patient.php');
include ('config.php');
$status = $_GET['status'];
$pId = $_GET['pId'];
if(! $conn){
    die("ERROR: Could not connect. " . mysqli_error());
}
 if($status==0)
 {
$sql = "UPDATE patient SET Status=1 WHERE PatientId=$pId";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
  else if($status==1)
 {
	$sql = "UPDATE patient SET Status=0 WHERE PatientId=$pId";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
mysqli_close($conn);

?>