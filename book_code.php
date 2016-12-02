<?php
include("connection.php"); 
$name=$_POST['name'];
$email=$_POST['email'];
$num=$_POST['num'];
$addr=$_POST['addr'];
$atotal=$_POST['atotal'];
$ctotal=$_POST['ctotal'];
$hotel=$_POST['hotel'];
$date=$_POST['dte'];
$sql="insert into booking values ('$name','$email','$num','$addr','$atotal','$ctotal','$hotel','$date')";
$s=mysql_query($sql);
if($s==1)
{
echo"<script>alert(\"Successful Booked. Thank You\");</script>";
echo"<script>setTimeout(\"location.href='index.php';\",1);</script>";
}
else
{
echo"<script>alert(\"could not Book\");</script>";
echo"<script>setTimeout(\"location.href='book.php';\",1);</script>";
}
?>