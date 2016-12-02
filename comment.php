<?php
include("connection.php"); 
$name=$_POST['name'];
$email=$_POST['email'];
$num=$_POST['num'];
$msg=$_POST['msg'];
$sql="insert into comment values ('$name','$email','$num','$msg')";
$s=mysql_query($sql);
if($s==1)
{
	echo "<script>alert(\"Thank you for your valuable Thoughts\")</script>";
	echo "<script>setTimeout(\"location.href='index.php';\")</script>>";
	
}
else
{
	header("contact.php");
}
?>