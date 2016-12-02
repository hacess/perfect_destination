<?php 
session_start();
include("check.php");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>STAY</title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>

<div class="row">
<div class="col-sm-4">
<div class="specials-heading">
						<h3>BUDGET HOTELS</h3>
					</div>
<a href="1star.php">

<img src="images/budget.jpg">
</a>
</div>
<div class="col-sm-4">
<div class="specials-heading">
						<h3>2 STAR HOTEL</h3>
					</div>
<a href="2star.php">
<img src="images/2star.jpg">
</div>
<div class="col-sm-4">
<div class="specials-heading">
						<h3>3-5 STAR HOTELS</h3>
					</div>
<a href="5star1.php">
<img src="images/5star.jpg">
</div>
</div>

<?php include("footer.html"); ?>
</body>

</html>