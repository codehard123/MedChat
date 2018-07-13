<?php
session_start();
$conn=new mysqli('localhost','root','','chatbox');
if($conn->connect_error)
echo "can't Connect to Database";
else
echo "Connection Established";
$comm = "select * from comment";
$query=$conn->query($comm);
echo ($conn->error);
$row=mysqli_fetch_array($query);
$name=$row['name'];
echo $name;
header("location:chat.php");