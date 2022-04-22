<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="header-top">
		<div class="container d-flex-lg-up">
			<div class="header-top-col">
				<a class="social-sm header-social" href="#">
					<svg class="svg-icon-header" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310" >
						<path d="M81.703 165.106h33.981V305a5 5 0 0 0 5 5H178.3a5 5 0 0 0 5-5V165.765h39.064a5 5 0 0 0 4.967-4.429l5.933-51.502a5 5 0 0 0-4.966-5.572h-44.996V71.978c0-9.732 5.24-14.667 15.576-14.667h29.42a5 5 0 0 0 5-5V5.037a5 5 0 0 0-5-5h-40.545A39.746 39.746 0 0 0 185.896 0c-7.035 0-31.488 1.381-50.804 19.151-21.402 19.692-18.427 43.27-17.716 47.358v37.752H81.703a5 5 0 0 0-5 5v50.844a5 5 0 0 0 5 5.001z"/>
					</svg>
				</a>
			</div>
			<div class="header-top-col">
				<a class="header-num" href="tel:+381911459112">+381 61 145 9112</a>
			</div>
		</div>
	</div>
	<div class="header-bottom container d-flex-lg-up">
		<div class="header-bottom-col header-bottom-col-left">
			<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</div>
		<button class="mobile-toggler">
			<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
				<path fill="none" d="M0 0h16v16H0z"/>
				<path d="M1 9h14V7H1v2zm0 5h14v-2H1v2zM1 2v2h14V2H1z"/>
			</svg>
		</button>
		<div class="header-bottom-col header-bottom-col-right d-flex-lg-up">
			<nav role="navigation" class="main-nav">
				<?php
				wp_nav_menu( array( 
					'theme_location' => 'mazniweb', 
					'container_class' => 'head-nav' ) ); 
				?>
			</nav>
			<a class="btn btn-primary" href="#">Posalji Zahtev</a>
		</div>
	</div>
</header>

<main id="primary" class="site-main" role="main">
