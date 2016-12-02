<?php 
include("connection.php");
$adult=$_POST['atotal'];
$child=$_POST['ctotal'];
$dte=$_POST['dte'];
$hotel=$_POST['hotel'];
$h=0;
$sql="select email  from booking  where hotel='$hotel'";
$s=mysql_query($sql);
if(mysql_num_rows($s))
{
	while($row=mysql_fetch_array($s))
	$h=$h+1;
}
$d=0;
$sql="select email  from booking  where  dte='$dte'";
$s=mysql_query($sql);
if(mysql_num_rows($s))
{
	while($row=mysql_fetch_array($s))
	$d=$d+1;
}
if($d<5 && $h <5)
{
	echo"<script>alert(\"Booking Available Please Fillup the form\");</script>";
echo"<script>setTimeout(\"location.href='book.php';\",1);</script>";
}
else
{
	header("location:sorry.php");
}
?>