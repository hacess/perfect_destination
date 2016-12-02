<?php include("connection.php"); ?>
<?php
$email=$_POST['email'];
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$addr=$_POST['addr'];
$num=$_POST['num'];
$sql="insert into user(email,name,pwd,addr,num) values('$email','$name','$pwd','$addr','$num')";
$s=mysql_query($sql);
if($s==1)
{
	echo "<script>alert(\"Registered successfully\")</script>";
	echo "<script>setTimeout(\"location.href='login.php';\")</script>";
}
else
{
	echo "<script>alert(\"Could not register !! Try Again\")</script>";
	echo "<script>setTimeout(\"location.href='register.php';\")</script>";
}
		
?>