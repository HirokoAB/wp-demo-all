<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
	console.log('testcocococo');
    location = 'http://localhost/wordpress_sample/thankyou';
}, false );
</script>

<div class="custom-header">

		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
