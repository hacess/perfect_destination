<?php include("check.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta content="charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Food</title>
	
	<!-- FlexSlider pieces -->
	<link rel="stylesheet" href="css/default-five-slides.css" type="text/css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/css3-mediaqueries.js"></script>
	
	<!-- Kwiks pieces -->
	<script src="js/kwiks.js"></script>	
	<!-- Hook up the FlexSlider -->
	<script type="text/javascript">
		var Main = Main || {};

		jQuery(window).load(function() {
			window.responsiveFlag = jQuery('#responsiveFlag').css('display');
			Main.gallery = new Gallery();
			
			jQuery(window).resize(function() {
				Main.gallery.update();
			});
		});

		function Gallery(){
			var self = this,
				container = jQuery('.flexslider'),
				clone = container.clone( false );
				
			this.init = function (){
				if( responsiveFlag == 'block' ){
					var slides = container.find('.slides');
					
					slides.kwicks({
						max : 500,
						spacing : 0
					}).find('li > a').click(function (){
						return false;
					});
				} else {
					container.flexslider();
				}
			}
			this.update = function () {
				var currentState = jQuery('#responsiveFlag').css('display');
				
				if(responsiveFlag != currentState) {
				
					responsiveFlag = currentState;
					container.replaceWith(clone);
					container = clone;
					clone = container.clone( false );
					
					this.init();	
				}
			}
			
			this.init();
		}
	</script>
</head>
<body>
	<div id="container">
		<div class="specials-heading">
						<h3>Local Food</h3>
					</div>
		
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="images/food/1.jpg" />
					<div class="flex-caption">
						<h3>Noodles</h3>
						<p>The best noodles or well known as chowmin.Cooked with fresh vegetables.</p>
					</div>
				</li>
				<li>
					<a href="#"><img src="images/food/2.jpg" /></a>
					<div class="flex-caption">
						<h3>Colourful</h3>
						<p>The best momo's you had ever .The mom's can be of different colours,Increasing your hunger.</p>
					</div>
				</li>
				<li>
					<img src="images/food/3.jpg" />
					<div class="flex-caption">
						<h3>The Best</h3>
						<p>Darjeeling tea is not only famous in india but in whole world. It is known for its best taste and quality.</p>
					</div>
				</li>
				<li>
					<img src="images/food/4.jpg" />
					<div class="flex-caption">
						<h3>Non-veg Momo's</h3>
						<p>The momo's is not only made of vegetables but also of checken.Enhancing the taste.</p>
					</div>
				</li>
				<li>
					<img src="images/food/5.jpg" />
					<div class="flex-caption">
						<h3>Different Variety</h3>
						<p>The momo is not only veg or non-veg , it can be fried , buff etc.</p>
					</div>
				</li>
			</ul>
	  </div>
	</div>
	<span id="responsiveFlag"></span>
    <div class="footer">
			<div class="wrap">
			<div class="footer-grids">
				<div class="footer-grid">
					<h3>EXTRAS</h3>
					<p>Ut rutrum neque a mollis laoreet diam enim feuiat dui nec ulacoper quam felis id diam. Nunc ut tortor ligula eu petiu risus. Pelleesque conquat dignissim lacus quis altrcies.</p>
				</div>
				<div class="footer-grid">
					<h3>RECENT POSTS</h3>
					<ul>
						<li><a href="#">Vestibulum felis</a></li>
						<li><a href="#">Mauris at tellus</a></li>
						<li><a href="#">Donec ut lectus</a></li>
						<li><a href="#">vitae interdum</a></li>
					</ul>
				</div>
				<div class="footer-grid">
					<h3>USEFUL INFO</h3>
					<ul>
						<li><a href="#">Hendrerit quam</a></li>
						<li><a href="#">Amet consectetur </a></li>
						<li><a href="#">Iquam hendrerit</a></li>
						<li><a href="#">Donec ut lectus </a></li>
					</ul>
				</div>
				<div class="footer-grid footer-lastgrid">
					<h3>CONTACT US</h3>
					<p>Pelleesque conquat dignissim lacus quis altrcies.</p>
					<div class="footer-grid-address">
						<p>Tel.800-255-9999</p>
						<p>Fax: 1234 568</p>
						<p>Email:<a class="email-link" href="#">info(at)yourcompany.com</a></p>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
		</div>
		<!---End-footer---->
		<div class="clear"> </div>
		<div class="copy-right">
				<p>Design by Chandan Chakraborty,Srideep Bhatacharya,Shubhamoy Sarker,Abhishek Dutta Roy</p>
		</div>
</body>
</html>