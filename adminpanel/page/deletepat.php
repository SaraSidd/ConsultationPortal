<?php
header('Location:patient.php');
include('config.php');
$pId = $_GET['pId'];
$del = $_GET['delete'];

if(! $conn){
    die("ERROR: Could not connect. " . mysqli_error());
}
 if($del==0)
 {
$sql = "UPDATE patient SET DeleteStatus=1 WHERE PatientId=$pId";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
mysqli_close($conn);
?>