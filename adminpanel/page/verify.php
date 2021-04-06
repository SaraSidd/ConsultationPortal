<?php
header('Location:doctor.php');
include ('config.php');
$status = $_GET['status'];
$dId = $_GET['dId'];
if(! $conn){
    die("ERROR: Could not connect. " . mysqli_error());
}
 if($status==0)
 {
$sql = "UPDATE doctor SET Status=1 WHERE DocId=$dId";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
  else if($status==1)
 {
	$sql = "UPDATE doctor SET Status=0 WHERE DocId=$dId";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
mysqli_close($conn);

?>