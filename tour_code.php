<?php
include("connection.php"); 
$name=$_POST['name'];
$email=$_POST['email'];
$num=$_POST['num'];
$addr=$_POST['addr'];
$atotal=$_POST['atotal'];
$ctotal=$_POST['ctotal'];
$date=$_POST['dte'];
$sql="insert into tour values ('$name','$email','$num','$addr','$atotal','$ctotal','$date')";
$s=mysql_query($sql);
if($s==1)
{
echo"<script>alert(\"Successful Booked. Thank You\");</script>";
echo"<script>setTimeout(\"location.href='index.php';\",1);</script>";
}
else
{
echo"<script>alert(\"could not Book\");</script>";
echo"<script>setTimeout(\"location.href='book_tour.php';\",1);</script>";
}
?>