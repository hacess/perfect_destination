<?php include("connection.php"); ?> 
<!DOCTYPE HTML>
<head>
<title>Perfect Destination Traveling Website Template | Contact :: W3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
		<!---start-wrap---->
			<!---start-header---->
			<?php include("check.php"); ?>
			<!---End-header---->
		<!---End-wrap---->
		<div class="clear"> </div>
		<!---start-content---->
		<div class="content">
			<div class="wrap">
			<!---start-contact---->
			<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<div><img src="images/siem.jpg"></div><br><small><a href="https://www.google.co.in/maps/place/Surendra+Institute+of+Engineering+and+Management,+Siliguri/@26.760947,88.370066,15z/data=!4m5!3m4!1s0x0:0xa7e0272052b1ddae!8m2!3d26.760947!4d88.370066" style="color:#666;text-align:left;font-size:0.85em">View Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Our Information :</h3>
						    	<p>Surendra Institute Of Engineering & Management</p>
						   		<p>Siliguri</p>
				   		<p>Phone:07407315404</p>
				 	 	<p>Email: <span>chandanaug13@gmail.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>LinkedIn</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="comment.php">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="name" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="num" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>COMMENT</label></span>
						    	<span><textarea name="msg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="mybutton" value="Submit"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
			  </div>
			  </div>
			<!---End-contact---->
			<div class="clear"> </div>
		</div>
		<!---End-content---->
		<div class="clear"> </div>
		<!---start-footer---->
		<?php include("footer.html"); ?>
		<!---End-footer---->
		
	</body>
</html>

