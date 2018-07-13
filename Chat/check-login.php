<?php
include("config.php");
session_start();

$uName = $_POST['username'];
$pWord = $_POST['password'];

$qry = "SELECT * FROM Signup WHERE Username='".$uName."' and Password='".$pWord."'";
$res = $conn->query($qry);
$num_row = mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);

if( $num_row == 1 ) 
{
	echo 'true';
	$_SESSION['uname']=$row['Username'];
	header('location:chat.php');
}
else {
	echo 'false';
}
?>