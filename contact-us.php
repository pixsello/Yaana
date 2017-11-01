<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<title>Contact Us | Yaana Bikes</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="32x32" href="images/fevicon.png">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--    back to top-->
    <link rel="stylesheet" href="back-to-top/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="back-to-top/css/style.css"> <!-- Gem style -->
        
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
                       			<h2>Contact Us</h2>
                        		<div class="projects">
                      				<ul>
                            			<li><a href="index.php">Home</a></li>
                                		<li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                                		<li>Contact Us</li>
                        			</ul>
                            	</div><!--projects end-->
                          </div><!--title end-->
                       </div><!--aboutus end-->
                    </div><!--overlay end-->
                </div><!--container end-->
            </div>
        
        <section id="contact" class="contact-section gray-bg angle-contact-section"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="section-title"> 
                            <h2>Get in Touch</h2>
                            
                        </div>
                    </div><!-- END COL -->
                </div><!-- END ROW -->

                <div class="row"> 
                    <div class="col-sm-8 col-md-8"> 
                        <div class="contact-form"> 
                            <form id="contactform" method="POST" action="http://online.pixsello.in/yaana/email/contact-form.php" name="myform" novalidate="">
                                <div class="row"> 
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name*" required="" data-parsley-minlength="4">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address*" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" class="form-control" id="Mobiles" name="Mobile" placeholder="Your Contact No*" required="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message here..." required="" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 character comment.." data-parsley-validation-threshold="10" restrict="A-Z\a-z\0-9"></textarea>
                                </div>
<!--                                <div class="g-recaptcha" data-sitekey="6LeMly8UAAAAAG8FJH-xbRYPyV825xNA3KzwWtcr"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LeMly8UAAAAAG8FJH-xbRYPyV825xNA3KzwWtcr&amp;co=aHR0cDovL2Vudnl0aGVtZS5jb206ODA.&amp;hl=en&amp;v=r20171011122914&amp;size=normal&amp;cb=bidfmul6nuje" title="recaptcha widget" width="304" height="78" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>-->
<!--                                <div id="contact_send_status"></div>-->
                                
                                <div class="text-center">
                                    <button type="submit" class="default-button">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- END COL -->
                    
                    <div class="col-sm-4 col-md-4"> 
                        <div class="contact-info">
                            <ul> 
                                <li> 
                                    <i class="icofont icofont-social-google-map"></i>
                                    <h3>Office Address:</h3>
                                    <p>Bengaluru Karnataka India</p>
                                </li>
                                <li> 
                                    <i class="icofont icofont-envelope"></i>
                                    <h3>E-mail Address:</h3>
                                    
                                    <p><a href="mailto:contact@yaana.net.in">contact@yaana.net.in</a></p>
                                </li>
<!--
                                <li> 
                                    <i class="icofont icofont-phone"></i>
                                    <h3>Phone Number:</h3>
                                    <p>+91 9036432100</p>
                                </li>
-->
                            </ul>
                        </div>
                    </div><!-- END COL -->
                </div><!-- END ROW -->
            </div><!-- END CONTAINER -->
        </section>
        
        
        
       <!-- footer -->
	<?php include('footer.php'); ?>
	<!-- footer -->  
        <!--validation-->
    
    <script src="js/jquery.validate.min.js"></script>
     <script src="js/additional-methods.js"></script>
<script>
	

	$().ready(function() {
		// validate the comment form when it is submitted
		
		jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-zA-Z _]+$/i.test(value);
}, "Letters only please");
		
	// validate signup form on keyup and submit
		$("#contactform").validate({
			rules: {								
				name: {
					lettersonly:true,
					required: true,
										
				},
				Mobiles: {
					required:true,
					minlength:10,
					phoneUS: true,
					maxlength:10
				},
				
				
				email: {
					required: true,
					email: true
				},
				
				
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
			},
			
			messages: {
				name: "Please enter your name",
				
				
				
				email: {
					required: "Please enter your email",
				},
				
				message: {
					required: "Please enter your message",
				},
				
				Mobiles: {
					required: "Please enter valid phone number",
					minlength: "Ten digit mobile number"
				},
				
			}
		});
		});
	</script>        
  
    </body>
</html>

