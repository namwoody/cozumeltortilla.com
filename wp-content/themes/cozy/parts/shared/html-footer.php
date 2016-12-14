<div class="footer1">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-4">
				<ul>
					<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
				</ul>
			</div>
			<div class="col-md-5 col-md-offset-2 col-sm-8 col-xs-8" id="subscribe-form">
				<h2>NEWSLETTER</h2>
				<p>
					Subscribe to our newsletter to receive news, updates,<br /> 
					free stuff and new releases by email. We don't do spam..
				</p>
				<?php 
				$widgetNL = new WYSIJA_NL_Widget(true);
				echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php'));

				?>
			</div>			
		</div>
	</div>
</div>



<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				
			</div>
			<div class="col-md-4">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/images/img/cozumel-logo.png" alt="cozumel logo" width="240px">	
				</a>
				<p id="address">
					877 10th Ave,<br /> 
					New York, NY 10019<br />
					<span>PHONE: (000)000-0000</span> / <a href="">EMAIL US</a>
				</p>
			</div>
		</div>
	</div>
</div>
&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"> </script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"> </script>

<script src="https:////cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>


<script type="text/javascript">
	$('.wysija-submit').attr('id','front-button');
</script>

	<?php wp_footer(); ?>
	</body>
</html>