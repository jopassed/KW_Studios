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
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

 </script>
</body>
</html>