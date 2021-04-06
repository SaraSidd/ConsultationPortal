<?php
header('Location:pharmacy.php');
include ('config.php');
$status = $_GET['status'];
$pId = $_GET['pId'];
if(! $conn){
    die("ERROR: Could not connect. " . mysqli_error());
}
 if($status==0)
 {
$sql = "UPDATE pharmacy SET Status=1 WHERE PharmacyID=$pId";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
  else if($status==1)
 {
	$sql = "UPDATE pharmacy SET Status=0 WHERE PharmacyId=$pId";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
mysqli_close($conn);

?>