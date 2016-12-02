<?php include("check.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta content="charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Darjeeling toy train</title>
	
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
						<h3>Toy Train</h3>
					</div>
		
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="images/toytrain/t1.jpg" />
					<div class="flex-caption">
						<h3>The old Engine</h3>
						<p>The first engine which used coal to run the train.</p>
					</div>
				</li>
				<li>
					<a href="#"><img src="images/toytrain/t2.jpg" /></a>
					<div class="flex-caption">
						<h3>The perfect view</h3>
						<p>The third height peak in the world is the kanchanjangha peak . You can have the veiw from toy train.</p>
					</div>
				</li>
				<li>
					<img src="images/toytrain/t3.jpg" />
					<div class="flex-caption">
						<h3>Powerful Engine</h3>
						<p>The coal engine have been replaced by the powerful deasel engine. .</p>
					</div>
				</li>
				<li>
					<img src="images/toytrain/t4.jpg" />
					<div class="flex-caption">
						<h3>Touching The clouds</h3>
						<p>The perfect place to feel that you are realy one the top of the world.Everyone's dream place.</p>
					</div>
				</li>
				<li>
					<img src="images/toytrain/t5.jpg" />
					<div class="flex-caption">
						<h3>Batasia Loop</h3>
						<p>a wonderful viewing place with gardens, streams and falls,view of the landscape, Kanchenjunga and the other Eastern Himalayan peaks. </p>
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