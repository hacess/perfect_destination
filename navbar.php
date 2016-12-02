
<!DOCTYPE html>
<html>
<head>
<style>
#a{
	background-image:url(images/Packages_imges/mirik.JPG);
	height:500px;	
	}
#b
{
	background-color:#00B386;
	border-bottom-left-radius:30px;
	border-bottom-right-radius:30px;
	border-top-left-radius:30px;
	border-top-right-radius:30px;
	font-size:50px;

}
.c{
	width:auto;
	height:250px;
	
}
</style>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</head>
<body >
<?php include("header.html");?>
<!--<div class="list-inline">
<ul>
  <li> <<a href="day1.php"><b>day1</b></a></li>
  <li><a href="day2.php"><b>day2</b></a></li>
  <li><a href="day3.php"><b>day3</b></a></li>
  <li><a href="day4.php"><b>day4</b></a></li>
</ul>
</div>-->
<div class="row" align="center" id="a">
<div class="col-sm-3">
<form action="day1.php">
<input type="submit" id="b"  name="day1" value="day1">
</form>
</div>
<div class="col-sm-3" align="center">
<form action="day2.php">
<input type="submit" id="b" name="day2" value="day2">
</form>
</div>
<div class="col-sm-3" align="center">
<form action="day3.php">
<input type="submit" id="b" name="day3" value="day3">
</form>
</div>
<div class="col-sm-3" align="center">
<form action="day4.php">
<input type="submit" id="b" name="day4" value="day4">
</form>
</div>
<div class="row" align="center" >
<div class="col-sm-4" align="center">
</div>
<div class="col-sm-4" align="center">
<form action="book_tour.php">
<input type="submit" id="b" name="" value="Book Now">
</form>
</div>
<div class="col-sm-4" align="center">
</div>
</div>
</div>
<?php include("footer.html");?>
</body>
</html>

