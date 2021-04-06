<?php 
session_start();
unset($_SESSION['id']);
unset($_SESSION['username']);
include('config.php');

if($_session['id'] == "" || $_session['username'] == "")
{
	Header( 'Location: doclog.php');
}


if($_SERVER["REQUEST_METHOD"] == "POST")
{

$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']);
 
$sql="SELECT * FROM doctor WHERE Email='$myusername' and Password='$mypassword'";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$id = $row[0];
$username = $row[10];
$name = $row[1];


$_SESSION['id'] = $id;
$_SESSION['username'] = $username;
$_SESSION['named'] = $name;
 

if($count==1)
{
	
	Header( 'Location: patdata.php');
} 
else 
{
    echo "Invalid Username or Password";
}

mysqli_close($conn);
	
	
}
?>