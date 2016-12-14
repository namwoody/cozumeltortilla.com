<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>




<div class="container">
	<div class="row">
		<div class="slider" id="front-slider">
			<img src="<?php bloginfo('template_directory'); ?>/images/img/slider5.jpg" width="960px" alt="cozumel food slider">
		</div>

		<h1 class="text-center catering-font">
			WE’LL CATER TO YOU
		</h1>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			
		</div>
	</div>
</div>

<div class="row">
		<div class="col-md-6 slide1" id="slide1">
			<img id ="tortilla" src="<?php bloginfo('template_directory'); ?>/images/img/tortilla.png" alt="cozumel tortilla">
		</div>
		<div class="col-md-6 slide2" id="slide2">
			<img  id="chips" src="<?php bloginfo('template_directory'); ?>/images/img/chips1.jpg" alt="cozumel chips" >
		</div>
</div>

<?php Starkers_Utilities::get_template_parts( array('parts/shared/html-footer') ); ?>