
<?php
/**
 * The template for displaying all pages.
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
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
 

 <header id="masthead">

<div class="header-slider-container">
	<div class="header-slick-slider">

	  <!-- Full-width images with number and caption text -->
	  <div class="head-slider-wrap">
	   	    <div class="site-header" role="banner" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/KWProduction.jpg') no-repeat 50% 50%;	-webkit-background-size: cover; -moz-background-size:cover;
					-o-background-size: cover;
					background-size: cover;
		            height:90vh;">'</div>
	    <div class="text">KW PRODUCTION STUDIO <span>Book Now</span></div>
	  </div>

	  <div class="head-slider-wrap">
		    <div class="site-header" role="banner" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/KWAtrium.jpg') no-repeat 50% 50%;	-webkit-background-size: cover; -moz-background-size:cover;
					-o-background-size: cover;
					background-size: cover;
		            height:90vh;">'</div>
	    <div class="text">KW Atrium STUDIO <span>Book Now</span></div>
	  </div>

	  <div class="head-slider-wrap">
	  	   	<div class="site-header" role="banner" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/kw-recording-for-web.png') no-repeat 50% 50%;	-webkit-background-size: cover; -moz-background-size:cover;
					-o-background-size: cover;
					background-size: cover;
		            height:90vh;">'</div>
	    <div class="text">KW Recording STUDIO <span>Book Now</span></div>
	  </div>

	  
	</div>
</div>



<div class="site-branding">
     <a href="#primary"><span class="typcn typcn-arrow-sorted-down move-on-down"></span></a>
			<div class="site-branding-wrap">
                <div id="site-header">
			<h1 class="site-title ">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' );?>
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
           	<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>