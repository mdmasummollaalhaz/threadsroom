<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garydavis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'garydavis' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="topFixed">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$garydavis_description = get_bloginfo( 'description', 'display' );
				if ( $garydavis_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $garydavis_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			 <nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'garydavis' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav> <!-- #site-navigation -->
		</div>
		
		   <div class="mobile-nav">
				<div class="navWrapper mobileNav">
					<div class="logo-mobile">
						<?php the_custom_logo();?>
					</div>
					<div class="right">
						<div id="nav-icon" id="menuIcon">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="overlay">
							<div class="overlayContent">
								<a href="#" id="services">Services</a>
								<a href="#" id="work">Our work</a>
								<a href="#" id="contact">Contact</a>
								<p>Copyright 2018</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section>
			  <div class="banner-section">
			   <div class="container">
				  <div class="content-inner">
				  <h1 class="hero-text">Freelance UX / UI Designer</h1>
				   
					  <p ><span>Design</span> is everything, for everything is designed</p>
					</div>
				  
				</div>
			  </div>
			</section>
		
		
	</header><!-- #masthead -->
