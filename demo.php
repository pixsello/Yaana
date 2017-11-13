<html xmlns="http://www.w3.org/1999/xhtml">
<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<header>
  
    <style>
        * {
  box-sizing: border-box;
}
body {
  margin: 0;
  padding-top: 250px;
}
header {
  height: 300px;
  padding-top: 50px;
  background: #f07057;
}
.main-nav,
.main {
  position: relative; 
}
.main-nav {
  background: #fff;
  height: 80px;
  z-index: 150;
  margin-bottom: -80px;
  box-shadow: 0 2px 3px rgba(0,0,0,.4);
}
header,
.main-nav-scrolled {
  position: fixed;
  width: 100%;
  top: 0;
}
.main {
  background: #f2f2e8;
  padding: 110px 50px 50px;
  column-count: 2;
  column-gap: 40px;
}

    </style>
</header>
<nav class="main-nav">
  <nav class="navbar navbar-default navbar-fixed-top top-menu">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <a href="index.php" class="yaana-logo">
                        <img src="images/yaana-logo.png" class="img-responsive">
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if($page == 'index.php') { ?> class="active"<?php } ?> ><a href="index.php">Home</a></li>
                        <li <?php if($page == 'about.php') { ?> class="active"<?php } ?> ><a href="about.php">About Us</a></li>
<!--                        <li <?php if($page == 'how-it-works.php') { ?> class="active"<?php } ?> ><a href="how-it-works.php">How It Works </a></li>-->
                        <li <?php if($page == 'campus-and-cities.php') { ?> class="active"<?php } ?> ><a href="campus-and-cities.php">Campus and cities</a></li>
                        <li <?php if($page == 'safety.php') { ?> class="active"<?php } ?> ><a href="safety.php">Safety</a></li>
                        <li <?php if($page == 'contact-us.php') { ?> class="active"<?php } ?> ><a href="contact-us.php">Contact Us</a></li>
                        <li <?php if($page == 'download.php') { ?> class="active"<?php } ?> ><a href="download.php">Download</a></li>
                        
                      </ul>
                </div>
            </div><!-- END CONTAINER -->
        </nav>
</nav>

<script>
    var  mn = $(".main-nav");
    mns = "main-nav-scrolled";
    hdr = $('header').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
  } else {
    mn.removeClass(mns);
  }
});
</script>
</html>