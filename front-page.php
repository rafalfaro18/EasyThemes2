<?php

// Advanced Custom Fields
$slogan = get_field('slogan');
$subtext_under_slogan = get_field('sub-text_under_slogan');
$columns_title = get_field('columns_title');
$columns_content = get_field('columns_content');
$dark_banner_title = get_field('dark_banner_title');
$dark_banner_shout_out = get_field('dark_banner_shout_out');
$slogan_four_images = get_field('slogan_four_images');
$first_image_title = get_field('first_image_title');
$first_image = get_field('first_image');
$first_image_link = get_field('first_image_link');
$second_image_title = get_field('second_image_title');
$second_image = get_field('second_image');
$second_image_link = get_field('second_image_link');
$third_image_title = get_field('third_image_title');
$third_image = get_field('third_image');
$third_image_link = get_field('third_image_link');
$fourth_image_title = get_field('fourth_image_title');
$fourth_image = get_field('fourth_image');
$fourth_image_link = get_field('fourth_image_link');

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




<!-- Header Image Container -->
	<header class="home-header" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div >
                        <h1 class="header-text white"><?php echo $slogan ?></h1>
                        <hr />
						<?php if( !empty( $subtext_under_slogan)) : ?>
                       <h4><?php echo $subtext_under_slogan ?></h4>
					   <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
<!-- First Content Container -->
	<section class="container">
		<h3 class="text-center dark-font"><?php echo $columns_title ?></h3>
			<div class="row">
				<div class="col-sm-12 bg1 flex-3columns">
					<p><?php echo $columns_content ?></p>
				</div>
			</div>
	</section>
<!-- Second Content Container -->
<div class="container-fluid bg2 text-center">
	<h3 class="padding"> <?php echo $dark_banner_title ?> </h3>
	<p class="bigger-margin"><?php echo $dark_banner_shout_out ?></p>
	
</div>

<!-- Third Container (4 Columns) Images with Text-->
<div class="container-fluid bg3 text-center  ">    
	<h5 class="text-center yellow"><?php echo $slogan_four_images ?></h5>
	<div class="row ">
		<div class="col-sm-6 col-md-3">
			<p class="bigger-margin image-title "><a href="<?php echo $first_image_link ?>"><?php echo $first_image_title ?></p>
			<img src= "<?php echo $first_image['url']  ?>" class="img-responsive margin img-thumbnail wiggle"  alt="<? echo $first_image['alt'] ?>" ></a>
		</div>
		<div class="col-sm-6 col-md-3"> 
			<p class="bigger-margin image-title "><a href="<?php echo $second_image_link ?>"><?php echo $second_image_title ?></p>
			<img src= "<?php echo $second_image['url'] ?>" class="img-responsive margin img-thumbnail wiggle"  alt="<? echo $second_image['alt'] ?>" >
		</div>
		<div class="col-sm-6 col-md-3"> 
			<p class="bigger-margin image-title "><a href="<?php echo $third_image_link ?>"><?php echo $third_image_title ?></p>
			<img src="<?php echo $third_image['url'] ?>" class="img-responsive margin img-thumbnail wiggle "  alt="<? echo $third_image['alt'] ?>" >
		</div>
		<div class="col-sm-6 col-md-3"> 
			<p class="bigger-margin image-title "><a href="<?php echo $fourth_image_link ?>"><?php echo $fourth_image_title ?></p>
			<img src="<?php echo $fourth_image['url'] ?>" class="img-responsive margin img-thumbnail wiggle"  alt="<? echo $fourth_image['alt'] ?>">
		</div>
		
	</div>
</div>



<?php get_footer(); ?>

