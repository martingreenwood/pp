<?php
/**
 * Template Name: About
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

				<?php get_template_part( 'template-parts/content', 'about' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main>
	</div>

	<div id="whatwedo">
	
		<h3>What We Do</h3>
		<p>Just  few things you can ask us to help with</p>

		<div id="services">

			<?php if( have_rows('wordpress_services') ): ?>
			<div class="wordpress list">
				<i class="fa fa-wordpress"></i>
				<h3>WordPress Development</h3>
				<ul ckass="services">
					<?php while ( have_rows('wordpress_services') ) : the_row(); ?>

					<li><?php the_sub_field('service'); ?></li>

					<?php endwhile; ?>
				</ul>
			</div>
			<?php endif; ?>

			<?php if( have_rows('services') ): ?>
			<div class="front-end list">
				<i class="fa fa-television"></i>
				<h3>Front End Development</h3>
				<ul ckass="services">
					<?php while ( have_rows('services') ) : the_row(); ?>

					<li><?php the_sub_field('service'); ?></li>

					<?php endwhile; ?>
				</ul>
			</div>
			<?php endif; ?>
			
		</div>

		<h4>And more! <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?> ">Get in touch</a> with us to see if we can help you.</h4>

	</div>

	<div class="clients">

		<h3>Clients</h3>
		<p>Just a few people we have worked with</p>

		<?php $client_logos = get_field('client_logos'); if( $client_logos ): ?>
		<ul>
		<?php foreach( $client_logos as $client_logo ): ?>
		    <li>
		          <img src="<?php echo $client_logo['url']; ?>" alt="<?php echo $client_logo['alt']; ?>" />
		    </li>
		<?php endforeach; ?>
		</ul>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>
