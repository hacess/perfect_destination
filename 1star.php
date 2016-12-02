<!DOCTYPE html>

<html lang="en">

<!-- BEGIN head-->
<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    
    <!-- Title -->
    <title>1 STAR</title>
    
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
<h3>BUDGET HOTEL</h3>
</div>
<div class="row">
<div class="col-sm-8">
<h1>
If you are craving for great views of the Eastern Himalayan Mountain range, the snow peaks including that of Kanchenjunga, the wonderful landscape of Darjeeling town on the hill slope, comfortable stay and all that from a budget hotel, Broadway Annex can be a nice choice. Sounds too good to be true? There is a catch here I must admit. Nothing comes easy in life and the same principle applies here as well. While you do get all the Pro's I mentioned above, the cons is the fairly long strenuous uphill walk to reach up to the hotel.  
</h1>
</div>
<div class="col-sm-4">
<button type="button" id="a"><a href="avail.php"> BOOK NOW !!</a></button>
</div>
    
    <div class="wmuGallery example4">
    
        <div class="wmuSlider">        
            <div class="wmuSliderWrapper">
                <article>
                    <img width="75" height="75" src="images/a1.JPG" 
                    data-src-full="images/a1.JPG" />
                </article>
        
                <article>
                    <img width="75" height="75" src="images/a2.JPG" 
                    data-src-full="images/a2.JPG" />
                </article>
        
                <article>
                    <img width="75" height="75" src="images/a3.JPG"
                    data-src-full="images/a3.JPG" />
                </article>

                <article>
                    <img width="75" height="75" src="images/a4.JPG"
                     data-src-full="images/a4.JPG" />
                </article>
        
                <article>
                    <img width="75" height="75" src="images/a5.JPG"
                    data-src-full="images/a5.JPG" />
                </article>

                <article>
                    <img width="75" height="75" src="images/a6.JPG"
                    data-src-full="images/a6.JPG" />
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
</body>
      <?php
		include("footer.html");
	  ?>
<!-- END html -->
</html>