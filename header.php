<?php
include("security.php");
$name= ($_SESSION['user']['name']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />	
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<div class="header">
				<div class="wrap">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
                
				<div class="top-nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="contact1.php">Contact us</a></li>
						<li><li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo "Hi $name"; ?><span class="caret"></span></a>
      <ul class="dropdown-menu" >
        <li><a href="logout.php">LOG out</a></li>                      
      </ul>
    </li></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
<body>
</body>
</html>
