<?php
include("connection.php");
?>
<?php
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$sql="select * from user where email='$email' and pwd='$pwd'";
$s=mysql_query($sql);
if(mysql_num_rows($s))
{
	$row=mysql_fetch_array($s);
	$_SESSION['user']=$row;
	header("location:index.php");
;}
else
{
	header("location:login.php?err=1");
}
?>