<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sirius
 */

if ( ! is_active_sidebar( 'kp_product_sidebar' ) ) {
	return;
}
?>
<div class="container">
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'kp_product_sidebar' ); ?>
</aside>
</div>