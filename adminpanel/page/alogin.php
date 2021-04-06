<?php 
session_start();
unset($_SESSION['id']);
unset($_SESSION['username']);
include('config.php');

if($_session['id'] == "" || $_session['username'] == "")
{
	Header( 'Location: adminlog.php');
}


if($_SERVER["REQUEST_METHOD"] == "POST")
{

$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']);
 
$sql="SELECT * FROM admin WHERE UserName='$myusername' and Password='$mypassword'";
$result=mysqli_query($conn, $sql);

// print_r($result);
$count=mysqli_num_rows($result);
$row = $result->fetch_array();

$id = $row[0];
$username = $row[4];
$name = $row[1];


$_SESSION['id'] = $id;
$_SESSION['username'] = $username;
$_SESSION['name'] = $name;
 

if($count==1)
{
	
	Header( 'Location: adminPanel.php');
} 
else 
{
    echo "Invalid Username or Password";
}

mysql_close($conn);
	
	
}
?>