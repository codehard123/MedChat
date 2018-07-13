<?php

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

$con = new mysqli('localhost','root','','chatbox');


$sql="insert into logs (username,msg) values ('$uname', '$msg')";
$res=$con->query($sql);

$sql1="SELECT * FROM logs ORDER BY id DESC";
$res1=$con->query($sql1);


while($extract = mysqli_fetch_array($res1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}