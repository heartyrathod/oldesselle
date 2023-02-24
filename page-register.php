<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<section class="es-login-form">
			<div class="container">
				<div class="es-form-heading">
					<p>Login with email and password.
					</p>
				</div>
				<?php echo do_shortcode('[wc_reg_form_kp]'); ?>
			</div>
		</section>
	</div>
</article>
<?php

get_footer();
