<?php
session_start();
 include("check.php");
 ?>
<!DOCTYPE HTML>
<head>
<title>Around  World</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />	
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/responsiveslides.css">
<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link rel="icon" type="image/png" href="images/fav.png" sizes="96x96">
    
    <script src="js/bootstrap.min.js"></script>

		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 2500,
			        speed: 600
			      });
			});
		  </script>
 </head>
    <body>
		<!---start-header---->
			
			<!---End-header---->
		<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/slide4.jpg" alt=""></li>
					      <li><img src="images/slide2.jpeg" alt=""></li>
					      <li><img src="images/slide3.jpg" alt=""></li>
					       <li><img src="images/slide1.jpg" alt=""></li>
						 <!-- Slideshow 2 -->
					</div>
			<!--End-image-slider---->
		<!---End-wrap---->
		<div class="clear"> </div>
		<!---start-content---->
		<div class="content">
			    <div class="content_top">
			    	<div class="wrap">
						<h1><a href="#">WELCOME.</a></h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
						<span><a class="learnmore" href="#">LEARN MORE</a></span>
					</div>
			    </div>
			<div class="content-grids">
				<div class="wrap">
				 <div class="grid">
					<a href="#"><img src="images/grids-img1.jpg" title="image-name" /></a>
					<h3>Special Package</h3>
					<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
					<a class="button" href="navbar.php">More</a>
				</div>
				<div class="grid">
					<a href="#"><img src="images/news.jpg" title="image-name" /></a>
					<h3>NEWS & EVENTS</h3>
					<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
					<a class="button" href="news.php">More</a>
				</div>
				<div class="grid last-grid">
					<a href="#"><img src="images/support.gif" title="image-name" /></a>
					<h3>SUPPORT</h3>
					<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
					<a class="button" href="contact.php">More</a>
				</div>
				<div class="clear"> </div>
			</div>
		 </div>
			<div class="specials">
				<div class="wrap">
					<div class="specials-heading">
						<h3>Traveling Specials</h3>
					</div>
					<div class="specials-grids">
						<div class="special-grid">
							<img src="images/food.jpg" title="image-name" />
							<a href="food.php">Local Food</a>
							<p>Due to a varied mix of culture in Darjeeling, the local or ethnic food here also has a lot of diversity.</p></div>
						<div class="special-grid">
							<img src="images/garden.jpg" title="image-name" />
							<a href="tea.php">Darjeeling Tea</a>
							<p>Darjeeling has gone on to become the world leader in producing highest quality tea, a position which it has proudly retained for well over a century.Darjeeling tea is the ultimate tea and unique in the sense that it can only be produced in Darjeeling hills. </p> </div>
						<div class="special-grid spe-grid">
							<img src="images/train.jpg" title="image-name" />
							<a href="train.php">Toy Train</a>
							<p>Toy Train of Darjeeling Himalayan Railways (DHR) has been accorded the UNESCO World Heritage status.The Toy Train is still unmatched when it comes to absorbing magnificent beauty of the mountains.<p/></div>
						<div class="clear"> </div>
					</div>
			    </div>
			</div>	
			<div class="testmonials">
				<div class="wrap">
					<div class="testmonial-grid">
						<h3>TESTIMONIALS :</h3>
						<p>&#34; Lorem ipsum dolor sit amet, consectetur adipiscing elit. In volutpat luctus eros ac placerat. Quisque erat metus, facilisis non felis eu, aliquam hendrrit quam. Donec ut lectus vel dolor adipiscing tincidunt. Ut auctor diam at est iaculis, vitae interdum magna sagittis.&#34;</p>
						<a href="#"> - Lorem ipsum</a>
					</div>
				</div>
			</div>
		</div>
		<!---End-content---->
		<div class="clear"> </div>
		<!---start-footer---->
		<div class="footer">
			<div class="wrap">
				<div class="footer-grid">
					<h3>USEFUL INFO</h3>
					<ul>
						<li><a href="https://www.irctc.co.in/eticketing/loginHome.jsf">IRCTC</a></li>
						<li><a href="http://www.airindia.in/">DOMESTIC FLIGHT</a></li>
						<li><a href="#">BUS SERVICES</a></li>
					</ul>
				</div>
				<div class="footer-grid ">
					<h3>CONTACT US</h3>
					<p>Pelleesque conquat dignissim lacus quis altrcies.</p>
					<div class="footer-grid-address">
						<p>Tel.800-255-9999</p>
						<p>Fax: 1234 568</p>
						<p>Email:<a class="email-link" href="#">info(at)yourcompany.com</a></p>
					</div>
				</div>
                <div class="footer-grid ">
					<h3>MAP</h3>
					<div class="footer-grid-address">
						<a href="images/pdf.pdf"><p>Download the map of Darjeeling</p></a>
					</div>
				</div>
                 <div class="footer-grid ">
					<h3>EXTRA</h3>
					<div class="footer-grid-address">
						<a href="navbar.php"><p>Check out our Special 4 day package to Darjeeling</p></a>
					</div>
				</div>
                
                
				<div class="clear"> </div>
			</div>

		</div>
		<!---End-footer---->
		<div class="clear"> </div>
		<div class="copy-right">
				<p>Design by Chandan Chakraborty,Srideep Bhatacharya,Shubhamoy Sarker,Abhishek Dutta Roy</p>
		</div>
	</body>
</html>

