<?php include('include/config.php');

$user_email = $_POST["username"];
$user_pass = $_POST["password"];

$mysql_qry =  "select * from patient where Email = '".$user_email."' and Password = '".$user_pass."' and Status = 1 and DeleteStatus = 0";

$result = mysqli_query($conn, $mysql_qry);
while ($row = $result->fetch_assoc()) {

    if($row['PatientId']!=""){ 
        echo $row['PatientId'];
     }
    else{
        echo "0";
    }
}

?>