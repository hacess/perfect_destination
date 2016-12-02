<!DOCTYPE html>

<html lang="en">

<!-- BEGIN head-->
<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    
    <!-- Title -->
    <title>2 STAR</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
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
<!-- END head -->
</head>

<!-- BEGIN body -->
<body>

    <!-- BEGIN .wmuSlider -->
   <?php
session_start();
include("check.php");
?>

	<div class="specials-heading">
<h3>2 STAR</h3>
</div>
<div class="row">
<div class="col-sm-8">
<h1>
When it comes to only the services, comfort and food, it's quite difficult to differentiate one luxury hotel from the other. All these 2 star hotels and resorts are professionally managed and the staff are trained to show you smiling faces even if they are themselves not happy to see your face. All these luxury hotels compete to get the best chefs from various parts of India eventually leaving very little to compare in terms of quality or taste of food. And almost all will provide modern amenities that you won't complain with. 
</h1>
</div>
<div class="col-sm-4">
<button type="button" id="a"><a href="avail.php"> BOOK NOW !!</a></button>
</div>
    
    <div class="wmuGallery example4">
    
        <div class="wmuSlider">        
            <div class="wmuSliderWrapper">
                <article>
                    <img width="75" height="75" src="images/a.JPG" 
                    data-src-full="images/a.JPG" />
                </article>
        
                <article>
                    <img width="75" height="75" src="images/b.JPG" 
                    data-src-full="images/b.JPG" />
                </article>
        
                <article>
                    <img width="75" height="75" src="images/c.JPG"
                    data-src-full="images/c.JPG" />
                </article>

                <article>
                    <img width="75" height="75" src="images/d.JPG"
                     data-src-full="images/d.JPG" />
                </article>
        
                <article>
                    <img width="75" height="75" src="images/e.JPG"
                    data-src-full="images/e.JPG" />
                </article>

                <article>
                    <img width="75" height="75" src="images/f.JPG"
                    data-src-full="images/f.JPG" />
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
      <?php
include("footer.html");
?>
<!-- END body -->
</body>
<!-- END html -->
</html>