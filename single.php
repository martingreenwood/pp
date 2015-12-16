<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pp
 */

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', false);
$thumb_url = $thumb_url_array[0];

get_header(); ?>

	<?php //if($thumb_url): ?>
	<div id="js-parallax-window" class="parallax-window <?php echo $thumb_url; ?>">
		<div id="js-parallax-background" class="parallax-background" style="background-image: url(<?php echo $thumb_url; ?>)"></div>
	</div>
	<?php //endif; ?>

	<div id="article">

		<div class="row">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php the_post_navigation(); ?>

				<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>

		</div>

		<span class="clarfix"></span>

	</div>

<?php get_footer(); ?>
