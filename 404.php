<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pp
 */

get_header(); ?>

<?php $bg_image = get_field('404_image', 'option'); ?>

	<div id="primary" class="content-area" style="background-image: url(<?php echo $bg_image['url']; ?>);">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pp' ); ?></h1>
				</header><!-- .page-header -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
