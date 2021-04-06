<?php
header('Location:doctor.php');
include('config.php');
$dId = $_GET['dId'];
$del = $_GET['delete'];

if(! $conn){
    die("ERROR: Could not connect. " . mysqli_error());
}
 if($del==0)
 {
$sql = "UPDATE doctor SET DeleteStatus=1 WHERE DocId=$dId";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
mysqli_close($conn);
?>