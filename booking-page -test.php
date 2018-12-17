
<?php
/**
 * Template Name: Booking-Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Studio
 */

get_header(); ?>
<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'studio' ); ?></a>
<?php

    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<header id="masthead" class="site-header" role="banner" style="background: url('. $url.') no-repeat 50% 50%;
			-webkit-background-size: cover;
			-moz-background-size:    cover;
			-o-background-size:      cover;
			background-size:         cover;
            height:90vh;">';

?>
<div class="site-branding">
     <a href="#primary"><span class="typcn typcn-arrow-sorted-down move-on-down"></span></a>
			<div class="site-branding-wrap">
                <div id="site-header">
			<h1 class="site-title ">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			
		</div><!-- #site-header -->	
                	</div><!-- .site-branding-wrap -->
		</div><!-- .site-branding -->
<a href="#sidr-main" class="menu-toggle icon">
        </a>
 <nav id="site-navigation" class="main-navigation" role="navigation">
	    	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	   	</nav><!-- #site-navigation -->
</header>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class='ninja_form_popup_wrapper'>
           		<?php echo do_shortcode('[ninja_form id=1]') ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>