<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>

		<div class="columns">
			<div class="column half">
				<?php the_field('column_one'); ?>
			</div>

			<div class="column half">
				<?php the_field('column_two'); ?>
			</div>
		</div>

	</div>
	
</article>