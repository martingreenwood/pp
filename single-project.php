<?php
/**
 * The template for displaying all projects.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pp
 */

get_header(); ?>

	<?php $main_project_image = get_field('main_project_image'); ?>

	<?php if (!empty($main_project_image)): ?>
	<div id="js-parallax-window" class="parallax-window">
		<div id="js-parallax-background" class="parallax-background" style="background-image: url(<?php echo $main_project_image['url']; ?>)"></div>
	</div>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'project' ); ?>

			<?php the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
