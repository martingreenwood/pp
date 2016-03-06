<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pp
 */

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', false);
$thumb_url = $thumb_url_array[0];

get_header(); ?>

	<?php if($thumb_url): ?>
	<section id="slider" class="contact-page" style="background-image: url(<?php echo $thumb_url; ?>); ?>">

		<div class="slide-contact">

			<div class="text">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'contact' ); ?>

				<?php endwhile; // End of the loop. ?>

			</div>
		
		</div>

	</section>
	<?php endif; ?>

<?php get_footer(); ?>
