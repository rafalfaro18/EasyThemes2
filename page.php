<?php
get_header(); ?>

       
<div class="banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div><!----------- End of Blog banner ----------->





<div class="container">
	<div class="row">
	
			<div  class="col-md-6 column-margin">

<?php get_template_part('page', 'loop') ?>

			</div> <!-- closing main column tag-->

			
				<aside class="col-md-4  col-md-offset-2 column-margin "> <?php dynamic_sidebar( 'right_sidebar' ); ?>
				</aside><!-- closing sidebar column tag-->
	
	</div><!-- closing row tag-->
	
	<div class="row "><!-- Add Content  from Add Content to Page -->	
			<div class="col-md-10 col-md-offset-2 column-margin left-padding" >
				<?php $id = 143; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>
			</div>
	</div><!-- closing row tag for Added Content-->
													
</div><!-- closing container tag-->
	
	
								
								



<?php


get_footer(); ?>
