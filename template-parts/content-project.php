<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h3><?php the_field('project_tag_line'); ?></h3>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<a class="visit-site" href="<?php the_field('project_url'); ?>" target="_blank">View Full Site</a>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<?php if (get_field('enable_challenge')): ?>
<section id="challenge">

	<div class="wrap">

		<div class="text column">
			<div class="table">
				<div class="cell">
					<h2>The Challenge</h2>
					<p><?php the_field('challenge'); ?></p>
				</div>
			</div>

		</div>

		<?php $challenge_image = get_field('challenge_image'); ?>
		<div class="image column" style="background-image: url(<?php echo $challenge_image['url']; ?>);"></div>
		
	</div>

</section>
<?php endif; ?>
<?php if (get_field('enable_solutions')): ?>
<section id="solution">

	<div class="wrap">

		<?php $solution_image = get_field('solution_image'); ?>
		<div class="image column" style="background-image: url(<?php echo $solution_image['url']; ?>);"></div>

		<div class="text column">
			<div class="table">
				<div class="cell">
					<h2>The Solution</h2>
					<p><?php the_field('solution'); ?></p>
				</div>
			</div>
		</div>
		
	</div>

</section>
<?php endif; ?>
<?php if (get_field('enable_section_one')): ?>
<section id="feature-one">

	<div class="wrap">

		<div class="text column">
			<div class="table">
				<div class="cell">
					<h2><?php the_field('feature_one_heading'); ?></h2>
					<p><?php the_field('feature_one_text'); ?></p>
				</div>
			</div>
		</div>

		<?php $feature_one_image = get_field('feature_one_image'); ?>
		<div class="image column" style="background-image: url(<?php echo $feature_one_image['url']; ?>);"></div>
				
	</div>

</section>
<?php endif; ?>
<?php if (get_field('enable_section_two')): ?>
<section id="feature-two">

	<div class="wrap">

		<?php $feature_two_image = get_field('feature_two_image'); ?>
		<div class="image column" style="background-image: url(<?php echo $feature_two_image['url']; ?>);"></div>

		<div class="text column">
			<div class="table">
				<div class="cell">
					<h2><?php the_field('feature_two_heading'); ?></h2>
					<p><?php the_field('feature_two_text'); ?></p>
				</div>
			</div>
		</div>	
						
	</div>

</section>
<?php endif; ?>
<?php if (get_field('enable_quote')): ?>
<section id="quote">

	<div class="wrap">

		<blockquote>
			<h3><?php the_field('project_quote'); ?></h3>
			<p>&dash; <?php the_field('project_quote_person'); ?></p>
		</blockquote>

	</div>

</section>
<?php endif; ?>

<section id="the_wall">
	<?php echo PP_Social_Wall::display_pp_soicial_wall(); ?>
</section>