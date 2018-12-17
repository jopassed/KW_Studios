<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Studio
 */

	/** 
	 * studio_doctype hook
	 *
	 * @hooked studio_doctype -  10
	 * 
	 */
	do_action( 'studio_doctype' );
	?>

<head>
<?php	
	/** 
	 * studio_before_wp_head hook
	 *
	 * @hooked studio_head -  10
	 * 
	 */
	do_action( 'studio_before_wp_head' );

	wp_head(); ?>
	<meta name="google-site-verification" content="wgkplnI1YI1p_tlo2cD7lmv9ArelIW05oAV4f76Ja4g" />
</head>
<body <?php body_class(); ?>>

