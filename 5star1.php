<!DOCTYPE html>

<html lang="en">

<!-- BEGIN head-->
<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    
    <!-- Title -->
    <title>5 Star</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
            
<!-- END head -->
<style>
#a{
	background-color:#00B386;
	border-bottom-left-radius:30px;
	border-bottom-right-radius:30px;
	border-top-left-radius:30px;
	border-top-right-radius:30px;
	font-size:50px;

}
</style>

</head>

<!-- BEGIN body -->
<body>
		<?php
session_start();
include("check.php");
		?>
<div class="specials-heading">
<h3>3-5 STAR</h3>
</div>
<div class="row">
<div class="col-sm-8">
<h1>
When it comes to only the services, comfort and food, it's quite difficult to differentiate one luxury hotel from the other. All these 3 to 5 star hotels and resorts are professionally managed and the staff are trained to show you smiling faces even if they are themselves not happy to see your face. All these luxury hotels compete to get the best chefs from various parts of India eventually leaving very little to compare in terms of quality or taste of food. And almost all will provide modern amenities that you won't complain with. 
</h1>
</div>
<div class="col-sm-4">
<button type="button" id="a"> <a href="avail.php"> BOOK NOW !!</a></button>
</div>
</div>
   

    <!-- BEGIN .wmuGallery -->
    <div class="wmuGallery example4">
    
        <div class="wmuSlider">        
            <div class="wmuSliderWrapper">
                <article>
                    <img width="75" height="75" src="images/1.JPG" 
                    data-src-full="images/1.JPG" alt="WINDMARE" />
                </article>
        
                <article>
                    <img width="75" height="75" src="images/2.JPG" 
                    data-src-full="images/2.JPG" alt="VICEROY" />
                </article>
        
                <article>
                    <img width="75" height="75" src="images/3.JPG"
                    data-src-full="images/3.JPG" alt="CINCLAYERS" />
                </article>

                <article>
                    <img width="75" height="75" src="images/4.JPG"
                     data-src-full="images/4.JPG" alt="MAYFARE" />
                </article>
        
                <article>
                    <img width="75" height="75" src="images/5.JPG"
                    data-src-full="images/5.JPG" alt="EIGEN" />
                </article>

                <article>
                    <img width="75" height="75" src="images/6.JPG"
                    data-src-full="images/6.JPG" alt="CEDAR" />
                </article>
            </div>
        </div>  
                     
    <!-- END .wmuGallery -->
    </div>
                            
    <!-- Scripts -->
    <script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.wmuSlider.js"></script>
    <script src="js/jquery.wmuGallery.js"></script>
    <script>
        
        
        $('.example4').wmuGallery();
    </script>
    <link rel="stylesheet" href="css/bootstrap.css">  
<!-- END body -->
<?php
include("footer.html");
?>
</body>
<!-- END html -->
</html>