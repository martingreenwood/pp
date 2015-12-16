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
	</div>

	<div id="contact-info">

		<div class="info email">
		<?php if(get_field('email')): ?>
			<h3>Email</h3>
			<a href="mailto:<?php echo antispambot( the_field('email'), 1 ); ?>"><?php echo antispambot( the_field('email'), 1 ); ?></a>
			<?php endif; ?>
		</div>
		
		<div class="info phone">
			<h3>Phone</h3>
			<?php if(get_field('phone')): ?><p>t. <?php the_field('phone'); ?></p><?php endif; ?>
			<?php if(get_field('mobile')): ?><p>m. <?php the_field('mobile'); ?></p><?php endif; ?>
		</div>

		<div class="info address">
		<?php if(get_field('address')): ?>
			<h3>Studio</h3>
			<p><?php the_field('address'); ?></p>
		<?php endif; ?>
		</div>

	</div>

</article>

