<?php
$conn=new mysqli('localhost','root','','chatbox');

if($conn->connect_error)
echo "can't Connect to Database";
else
echo "Connection Established";
?>