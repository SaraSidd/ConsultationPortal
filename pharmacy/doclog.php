<?php 
// session_start();


include('config.php');
// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
//     // echo "asdasds";
// $myusername=addslashes($_POST['username']);
// $mypassword=addslashes($_POST['password']);

// echo $mypassword;
// echo $myusername;

$user_email = $_POST["username"];
$user_pass = $_POST["password"];

$mysql_qry = "select * from doctor where Email = '".$user_email."' and Password = '".$user_pass."' and Status = 1 and DeleteStatus = 0";
$result = mysqli_query($conn, $mysql_qry);

while ($row = $result->fetch_assoc()) 
{
    if($row['DocId']!=""){ 
        echo $row['DocId'];
    }
    else{
        echo "0";
    }
}

// $mysql_qry =  "select * from doctor where Email = '".$myusername."' and Password = '".$mypassword."' and Status = 1 and DeleteStatus = 0";

// $result = mysqli_query($conn, $mysql_qry);

// while ($row = $result->fetch_assoc()) {

//     // print_r ($result);
//     if($row['DocId']!=""){ 
//         echo $row['DocId'];
//      }
//     else{
//         echo "0";
//     }
// }

 
// $sql="SELECT * FROM doctor WHERE Email='$myusername' and Password='$mypassword'";
// $query=mysqli_query($conn, $sql);


// is_null($query)
//     // echo "User not available";
// else{
//     while ($row = $result->fetch_assoc()) {

//         // print_r ($result);
//         if($row['PatientId']!=""){ 
//             echo $row['PatientId'];
//          }
//         else{
//             echo "0";
//         }
//     }    

// die;
// $result=mysqli_result($query);
$count=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$id = $row[0];


$_SESSION['id'] = $id;
 

if($count==1)
{
	Header( 'Location: biohome.php');
} 
else 
{
    echo "Invalid Username or Password";
}

mysqli_close($conn);
	

?>