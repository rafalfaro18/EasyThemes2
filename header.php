<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- This Meta is really important for viewing on mobile phones -->
	<meta name="viewport" content="initial-scale=1 width=device-width">

	<!-- Title of the page -->
	<title><?php wp_title(' | ', true, 'right'); ?></title>

	<!-- Another Metas -->
	<meta name="description" content="Easy Themes">

	
	
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  <!--Google Fonts -->
	 <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
	 <!-- Font-awesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
	
	
	
	 
	<!-- IE 8 Support -->
	<!--[if lt IE 9]>
        <script src=" <?php get_template_directory_uri() . '/js/html5shiv.js'?>"></script>
    <![endif]-->
	
    <?php wp_head(); ?> 	<!-- Adds Injection Point  for head Area REQUIRED-->





</head>

<body>

	

<nav class="navbar  navbar-fixed-top navbar-inverse">
	<div class="container">
		<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				 <span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button><!-- Customizer Logo Upload -->
				<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
    <div class='logo'>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
    </div>
<?php else : ?>
    <div>
        <p class='logo'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></p>
       
    </div>
<?php endif; ?>

		</div>			<!--  End of Customizer Logo Upload -->
		<div class="collapse navbar-collapse" id="myNavbar"><!--  Nav Walker Class Menu (dropdown) -->
                    	 <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                
				'container_id'      => 'myNavbar',
                'menu_class'        => 'nav navbar-nav navbar-fixed navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
						?>


       	</div>



    </div>

</nav>    
    
