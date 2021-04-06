<?php 
header ('Location:doctor.php');
include('config.php');
$rating = $_POST['rating'];
$id = $_POST['id'];

if(! $conn){
    die("ERROR: Could not connect. " . mysqli_error());
}
 
$sql = "UPDATE doctor SET Rating=$rating WHERE DocId=$id";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


mysqli_close($conn);
















?>