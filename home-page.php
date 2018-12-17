<?php
/* Template Name: Home-Page */ 
get_header(); ?>
<?php

do_action( 'studio_header' );
do_action( 'studio_after_header' );
do_action( 'studio_content' );
do_action( 'studio_before_header' );
?>

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

<?php get_sidebar(); ?>
<?php get_footer(); ?>