<?php
$host="localhost";
$username="root";
$password="";
$databasename="mychat";
$database;

$connect=new mysqli($host,$username,$password);


if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $insert=$connect->query("insert into comments (name,comment,post_time) values('$name','$comment',CURRENT_TIMESTAMP)");
}

?>