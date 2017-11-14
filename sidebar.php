<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Judo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
		<div class="col-md-4">
		<?php echo do_shortcode( '[contact-form-7 id="123" title="Contact form 1"]' ); ?>					
		</dv>
		<div class="col-md-2"></div>
	</div>	
</aside><!-- #secondary -->
