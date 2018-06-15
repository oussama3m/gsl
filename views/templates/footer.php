<!-- FOOTER -->
	<footer id="fo" class="container ">
		<div id='about' class="row">
			<div class="col-md-4 ">
				<h6 style="color: white;">about global school of languages</h6>
				<p style="color: white;text-align: left;">At Dellys School of languges we offer a foreign language learning experience which is both fun and educational. We want our students to feel part of something special, something different. At Dellys School, you will experience more than just learning a foreign language; you will be part of our global family ! </p>
				
			</div>
			<div class="col-md-8 ">
				<h6 style="color: white;">Why dellys School ?</h6>
				<p style="text-align: left;">
					<ul class="list-inline ">
						<li><i class="fa fa-check-square-o"></i> Quality courses and dynamic teachers</li><br>
						<li><i class="fa fa-check-square-o"></i> Excellent value for money</li><br>
						<li><i class="fa ffa-check-square-o"></i> Amazing service - we ensure you get the most out of your time with us</li><br>
						<li><i class="fa fa-check-square-o"></i> We are so confident in the quality of our courses that we will give you your money back if you're not happy!</li>
					</ul>

				    
			    </p>
				
			</div>
			
		</div>
		<hr>
		<div id='contact' class="row">
			<div class="col-md-4">
				<p>Copyright 2015 - <a href="http://www.365bootstrap.com" target="_blank">Bootstrap Themes</a> Designed by 365Bootstrap.com</p>
			</div>
			<div class="col-md-4">
				<ul class="list-inline social-buttons">
					<li><a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li><a href="https://www.facebook.com/365bootstrap"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="list-inline quicklinks">
					<li><i class="fa fa-phone"></i>0</li><br>
					<li><i class="fa fa-phone"></i>1</li><br>
					<li><i class="fa fa-envelope"></i>1</li><br>
					<li><i class="fa fa-map-marker"></i>1</li>
				</ul>
			</div>
		</div>
	</footer>
  
	<!-- jQuery -->
	<script type="text/javascript" src="<?php echo base_url()?>visitor/js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>visitor/js/bootstrap.min.js"></script>
	
	<script>
		if ($(window).width() < 1199) {
			$('#sidebar').affix({
			  offset: {
				top: 398
			  }
			}); 
		} else {
			$('#sidebar').affix({
			  offset: {
				top: 442
			  }
			}); 
		}

		$(function() {
			$('#nav-wrapper').height($("#nav").height());
			
			$('#nav').affix({
				offset: { top: $('#nav').offset().top }
			});
		});
	</script>
	
	<!-- carousel -->
	<script src="<?php echo base_url()?>visitor/owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo1").owlCarousel({
        autoPlay: 3000,
        items : 3,
		itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2]
      });
	  $("#owl-demo2").owlCarousel({
        autoPlay: 3000,
        items : 3,
		itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2]
      });
    });
    </script>

</body>
</html>