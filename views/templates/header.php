<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.365bootstrap.com">

	<title>Global School</title>
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>visitor/css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="<?php echo base_url()?>visitor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url()?>visitor/owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>visitor/css/style.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url()?>visitor/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
</head>

 <body>

<header>
  <!-- ########################### -->
  <div class="top container">
    <div class="row">
      <div class="col-md-12">
      	<p style="font-size:30px" align="center" class="top"><br><b><span class="fa fa-globe"></span> DELLYS <br> SCHOOL <span class="fa fa-book"></span><br></b><small>of languges</small></p>
      </div>
    </div>
  </div>

  <!-- ############################## -->
  <div id="nav-wrapper">
    <div id="nav" class="navbar navbar-default navbar-inner container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
    
            <!-- BAR CONTENTS -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url()?>home"><span class="fa fa-home"> GSL </span></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!-- LEFT CONTENT -->
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Courses <span class="fa fa-arrow-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    
                    
                    <li><a href="#" style="font-weight:300"><span class="glyphicon glyphicon-asterisk"></span> English</a></li>
                    <li><a href="#" style="font-weight:300"><span class="glyphicon glyphicon-asterisk"></span> French</a></li>
                    <li><a href="#" style="font-weight:300"><span class="glyphicon glyphicon-asterisk"></span> Italy</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><span class="glyphicon glyphicon-asterisk"></span> children teaching </a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-asterisk"></span> our level system </a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-asterisk"></span> how do I register ?  </a></li>
                  </ul>
                </li>
                               

              <?php if (isset($_SESSION['profile']))
              { ?>

              </ul>
              
              <!-- RIGHT CONTENT -->
              <ul class="nav navbar-nav navbar-right">

                  <li><a href="<?php echo base_url(); ?>Account/connect"><span class="fa fa-user fa-lg"></span> My Account</a></li>

                  <li><a href="<?php echo base_url(); ?>Account/logout"><span class="fa fa-sign-out fa-lg"></span> Log Out</a></li>

              <?php } else {?>
                <li><a href="<?php echo base_url()?>register"><span class=" "></span> Inscription</a></li>
                <li><a href="<?php echo base_url()?>recruitment"><span class=" "></span> Recruitment</a></li>
              </ul>
              
              <!-- RIGHT CONTENT -->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url()?>login"><span class="fa fa-sign-in fa-lg"></span> Log In</a></li>
              <?php } ?>  
                <li><a href="#contact"><span class="fa fa-envelope"></span> Contact</a></li>
                <li><a href="#about"><span class="fa fa-info-circle fa-lg "></span> About Us</a></li>
                
              </ul>
            </div>
		
          </div> <!-- col -->
        </div> <!-- row -->
    </div> <!-- nav -->
  </div> <!-- wrapper -->

	<div class="container">
		<!-- CAROUSEL -->
		<div id="carousel-example-generic" class="carousel slide row hidden-xs" data-ride="carousel" data-interval="4000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
		 
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="<?php echo base_url()?>visitor/images/banner1.png" alt="..." style="width:100%">
				</div>
				<div class="item">
					<img src="<?php echo base_url()?>visitor/images/banner2.png" alt="..." style="width:100%">
				</div>
				<div class="item">
					<img src="<?php echo base_url()?>visitor/images/banner3.jpg" alt="..." style="width:100%">
				</div>
			</div>
		 
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div> <!-- Carousel -->
	</div>
</header>
