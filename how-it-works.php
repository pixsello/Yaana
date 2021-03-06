<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<title>How It Works | Yaana Bikes</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="32x32" href="images/fevicon.png">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--    back to top-->
    <link rel="stylesheet" href="back-to-top/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="back-to-top/css/style.css"> <!-- Gem style -->
    
     <link rel="stylesheet"  type="text/css" href="owl-carousel/owl.carousel.css" />
    <link rel="stylesheet"  type="text/css" href="owl-carousel/owl.theme.css" />   
    </head>
    
    <body>
        <!-- header -->
	<?php include('header.php'); ?>
	<!-- header -->
        
        <div class="inner_banner">
            	<div class="overlay">
            		<div class="container">
                		<div class="aboutus">
                    		<div class="title">
                       			<h2>How It Works</h2>
                        		<div class="projects">
                      				<ul>
                            			<li><a href="index.php">Home</a></li>
                                		<li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                                		<li>How It Works</li>
                        			</ul>
                            	</div><!--projects end-->
                          </div><!--title end-->
                       </div><!--aboutus end-->
                    </div><!--overlay end-->
                </div><!--container end-->
            </div>
        
        <section id="how-it-works" class="how-it-works angle-gray-bg inner-page"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="section-title section-h2"> 
                            <h2>How it works?</h2>
                        </div>
                    </div><!-- END COL -->
                </div><!-- END ROW -->
                
                <div class="row"> 
                    <div class="col-md-6"> 
                        <div class="hiw-feature-content"> 
                            <div class="single-hiw-feature"> 
                                <i class="fa fa-download" aria-hidden="true"></i>
                                <h4>Download</h4>
                                <p>Download the YAANA APP</p>
                            </div>
                            
                            <div class="single-hiw-feature"> 
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h4>Locate</h4>
                                <p>Open the app and find YAANA bicycles near to you.</p>
                            </div>
                            
                            <div class="single-hiw-feature"> 
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                <h4>Unlock</h4>
                                <p>Scan QR code on the cycle to unlock.</p>
                            </div>
                            
                            <div class="single-hiw-feature"> 
                                <i class="fa fa-hourglass-end" aria-hidden="true"></i>
                                <h4>End the ride</h4>
                                <p>Park at designated YAANA stations near to your destination and Manually lock.</p>
                            </div>
                        </div>
                    </div><!-- END COL -->
                    
                    <div class="col-md-5 col-md-offset-1"> 
                        <div class="video-demo-content"> 
                            <img src="images/yaana-Bike.png" alt="yaana-Bike" class="img-responsive">
                            <div class="play-video-icon">
<!--
                                <a class="popup-youtube" href="http://www.youtube.com/watch?v=k-R6AFn9-ek">
                                    <i class="icofont icofont-play"></i>
                                </a>
-->
                            </div>
                        </div>
                    </div><!-- END COL -->
                </div><!-- END ROW -->
                
    <div id="demo how-it-works">
        <div class="container">
            <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="section-title section-h2"> 
                            <h2>Navigation Help</h2>
                        </div>
                    </div><!-- END COL -->
                </div><!-- END ROW -->
          <div class="row">
            <div class="span12">
            <div class="col-md-10 center-block">
              <div id="owl-demo" class="owl-carousel">
                
                <div class="item">
                    <img src="images/steup1.png" class="img-responsive">
                </div>
                <div class="item">
                    <img src="images/steup2.png" class="img-responsive">
                </div>
                <div class="item">
                    <img src="images/steup3.png" class="img-responsive">
                </div>
                <div class="item">
                    <img src="images/steup4.png" class="img-responsive">
                </div>
                <div class="item">
                    <img src="images/steup5.png" class="img-responsive">
                </div>
              </div>
            </div><!-- end col-->
                <div class="customNavigation">
                <a class="btn prev"><i class="fa fa-angle-left"></i></a>
                <a class="btn next"><i class="fa fa-angle-right"></i></a>
                </div>
                
        </div>
          </div>
        </div>

    </div>
                
            </div><!-- END CONTAINER -->
            
        </section>
        
        
        
       <!-- footer -->
	<?php include('footer.php'); ?>
	<!-- footer -->  
     <!-- js --> 
        <!--owl carosel-script-->
        <script>
$(document).ready(function() {
 
  var owl = $("#owl-demo");
 
  owl.owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : [480,1],
                  navigation: true,

              autoPlay:5000,
  });
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })
 
});
            </script>
        
        
<script src="owl-carousel/owl.carousel.js"></script>
        
<!--owl carosel-script end-->

  
    </body>
</html>