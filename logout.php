<?php
include("connection.php");
?>
<?php
session_destroy();

echo"<script>alert(\"Successful Loged out . Thank You\");</script>";
echo"<script>setTimeout(\"location.href='index.php';\",1);</script>";
?>
