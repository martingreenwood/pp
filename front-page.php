<?php
/**
 * The front / home page template
 *
 * @package pp
 */

	// $thumb_id = get_post_thumbnail_id();
	// $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
	// $thumb_url = $thumb_url_array[0];

get_header(); ?>

	<?php $slide_img = get_field('slider_image'); ?>
	<section id="slider" <?php if ($slide_img): ?>style="background-image: url(<?php echo $slide_img['url']; ?>);"<?php endif; ?>>

		<div class="slide-text">

			<div class="text">
				<h2><?php the_field('slide_text'); ?></h2>
			</div>
		
		</div>

		<div class="arrow bounce"></div>
	</section>

	<section id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'home' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

		</main>
	</section>

	<section id="work">
		<div class="items">
			<div class="column">
			<?php
			$feature_project_one = get_field('feature_project_one');
			if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
				<div class="item one" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
					<a href="<?php the_permalink(); ?>">
					<div class="ovelay">
						<div class="tip">
							<h3><?php the_title(); ?></h3>
							<span><?php the_field('project_type'); ?></span>
						</div>					
					</div>
					</a>
				</div>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
			</div>

			<div class="column">
			<?php
			$feature_project_one = get_field('feature_project_two');
			if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
				<div class="item two" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
					<a href="<?php the_permalink(); ?>">
					<div class="ovelay">
						<div class="tip">
							<h3><?php the_title(); ?></h3>
							<span><?php the_field('project_type'); ?></span>
						</div>					
					</div>
					</a>
				</div>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

			<?php
			$feature_project_one = get_field('feature_project_three');
			if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
				<div class="item three" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
					<a href="<?php the_permalink(); ?>">
					<div class="ovelay">
						<div class="tip">
							<h3><?php the_title(); ?></h3>
							<span><?php the_field('project_type'); ?></span>
						</div>					
					</div>
					</a>
				</div>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

			<?php
			$feature_project_one = get_field('feature_project_four');
			if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
				<div class="item four" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
					<a href="<?php the_permalink(); ?>">
					<div class="ovelay">
						<div class="tip">
							<h3><?php the_title(); ?></h3>
							<span><?php the_field('project_type'); ?></span>
						</div>					
					</div>
					</a>
				</div>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
			</div>

		</div>
		<div class="more">
			<a href="<?php echo get_page_link(9);?>">View More <i class="fa fa-long-arrow-right"></i></a>
		</div>
	</section>

<?php get_footer(); ?>
