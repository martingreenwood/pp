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

	<div id="portfolio">

		<div class="section one">

		<?php
		$feature_project_one = get_field('portfolio_project_one');
		if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
			<div class="item one">
				<a href="<?php the_permalink(); ?>">
				<div class="ovelay">
					<div class="tip">
						<h3><?php the_title(); ?></h3>
						<span><?php the_field('project_type'); ?></span>
					</div>					
				</div>
				<?php the_post_thumbnail('portfolio-one'); ?>
				</a>
			</div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php else: ?>
			<div class="item four one empty">
			</div>
		<?php endif; ?>
						
		</div>

		<div class="section two">

			<div class="item two empty">

			</div>

		<?php
		$feature_project_one = get_field('portfolio_project_two');
		if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
			<div class="item three">
				<a href="<?php the_permalink(); ?>">
				<div class="ovelay">
					<div class="tip">
						<h3><?php the_title(); ?></h3>
						<span><?php the_field('project_type'); ?></span>
					</div>					
				</div>
				<?php the_post_thumbnail('portfolio-two'); ?>
				</a>
			</div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php else: ?>
			<div class="item three empty">
			</div>
		<?php endif; ?>
			
		</div>

		<div class="clearfix"></div>

		<div class="section three">

		<?php
		$feature_project_one = get_field('portfolio_project_three');
		if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
			<div class="item four">
				<a href="<?php the_permalink(); ?>">
				<div class="ovelay">
					<div class="tip">
						<h3><?php the_title(); ?></h3>
						<span><?php the_field('project_type'); ?></span>
					</div>					
				</div>
				<?php the_post_thumbnail('portfolio-three'); ?>
				</a>
			</div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php else: ?>
			<div class="item four empty">
			</div>
		<?php endif; ?>

			<div class="item five empty">
			
			</div>
			<div class="item six empty">
			
			</div>

		<?php
		$feature_project_one = get_field('portfolio_project_four');
		if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
			<div class="item seven">
				<a href="<?php the_permalink(); ?>">
				<div class="ovelay">
					<div class="tip">
						<h3><?php the_title(); ?></h3>
						<span><?php the_field('project_type'); ?></span>
					</div>					
				</div>
				<?php the_post_thumbnail('portfolio-four'); ?>
				</a>
			</div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php else: ?>
			<div class="item seven empty">
			</div>
		<?php endif; ?>
			
		</div>

		<div class="section four">

		<?php
		$feature_project_one = get_field('portfolio_project_five');
		if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
			<div class="item eight">
				<a href="<?php the_permalink(); ?>">
				<div class="ovelay">
					<div class="tip">
						<h3><?php the_title(); ?></h3>
						<span><?php the_field('project_type'); ?></span>
					</div>					
				</div>
				<?php the_post_thumbnail('portfolio-five'); ?>
				</a>
			</div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php else: ?>
			<div class="item eight empty">
			</div>
		<?php endif; ?>
			
		</div>

		<div class="clearfix"></div>

		<div class="section five">

		<?php
		$feature_project_one = get_field('portfolio_project_six');
		if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
			<div class="item nine">
				<a href="<?php the_permalink(); ?>">
				<div class="ovelay">
					<div class="tip">
						<h3><?php the_title(); ?></h3>
						<span><?php the_field('project_type'); ?></span>
					</div>					
				</div>
				<?php the_post_thumbnail('portfolio-six'); ?>
				</a>
			</div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php else: ?>
			<div class="item nine empty">
			</div>
		<?php endif; ?>
			
		</div>

		<div class="section six">

			<div class="item ten empty">

			</div>

		<?php
		$feature_project_one = get_field('portfolio_project_seven');
		if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
			<div class="item eleven">
				<a href="<?php the_permalink(); ?>">
				<div class="ovelay">
					<div class="tip">
						<h3><?php the_title(); ?></h3>
						<span><?php the_field('project_type'); ?></span>
					</div>					
				</div>
				<?php the_post_thumbnail('portfolio-seven'); ?>
				</a>
			</div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php else: ?>
			<div class="item eleven empty">
			</div>
		<?php endif; ?>

		<?php
		$feature_project_one = get_field('portfolio_project_eight');
		if( $feature_project_one ): $post = $feature_project_one; setup_postdata( $post ); ?>
			<div class="item twelve">
				<a href="<?php the_permalink(); ?>">
				<div class="ovelay">
					<div class="tip">
						<h3><?php the_title(); ?></h3>
						<span><?php the_field('project_type'); ?></span>
					</div>					
				</div>
				<?php the_post_thumbnail('portfolio-eight'); ?>
				</a>
			</div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php else: ?>
			<div class="item twelve empty">
				<a href="<?php echo get_page_link(126); ?>">
					<div class="tempt">
						<h3>Like what you see?</h3>
						<span>Start a Project</span>
					</div>
				</a>
			</div>
		<?php endif; ?>
			
		</div>

	</div>

</article>
