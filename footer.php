<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Studio
 */

/**
 * studio_after_content hook
 *
 * @hooked studio_content_end - 10
 *
 */
do_action( 'studio_after_content' );
?>

    <?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			

	         <?php if ( has_nav_menu( 'social' ) ) : ?>
	            <div class="social-menu">
			        <?php wp_nav_menu( array(
					    'theme_location' => 'social',
					    'depth'          => '1',
					    'link_before'    => '<span class="screen-reader-text">',
					    'link_after'     => '</span>' )
					    );
	                ?>
	            </div><!-- .social-menu -->
	        <?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
/**
 * studio_after hook
 *
 */
do_action( 'studio_after' );

wp_footer(); ?>
<script>



 </script>
</body>
</html>