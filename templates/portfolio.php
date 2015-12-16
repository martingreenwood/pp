<?php
/**
 * Template Name: Porfolio
 *
 * @package pp
 */

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
$thumb_url = $thumb_url_array[0];

get_header(); ?>

	<?php if($thumb_url): ?>
	<div id="js-parallax-window" class="parallax-window">
		<div id="js-parallax-background" class="parallax-background" style="background-image: url(<?php echo $thumb_url; ?>)"></div>
	</div>
	<?php endif; ?>

	<div id="primary" class="content-area inner">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main>
	</div>


<?php get_footer(); ?>
