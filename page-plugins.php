<?php
/**
 * The template for displaying the plugins page.
 *
 * @package pp
 */

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', false);
$thumb_url = $thumb_url_array[0];

$store_page_setting = (is_page_template('page-plugins.php') ? 'page' : 'paged' );
$current_page = get_query_var( $store_page_setting );
$per_page = intval( get_theme_mod( 'pp_store_front_count', 9 ) );
$offset = $current_page > 0 ? $per_page * ( $current_page-1 ) : 0;
$product_args = array(
	'post_type'		=> 'download',
	'posts_per_page'	=> $per_page,
	'offset'		=> $offset
);
$products = new WP_Query( $product_args );

get_header(); ?>

	<?php if($thumb_url): ?>
	<div id="js-parallax-window" class="parallax-window">
		<div id="js-parallax-background" class="parallax-background" style="background-image: url(<?php echo $thumb_url; ?>)"></div>
	</div>
	<?php endif; ?>

	<div id="primary" class="content-area inner">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main>
	</div>

	<section id="plugins">
		<div class="container">
			<div class="product-grid">
				
			<?php if ( $products->have_posts() ) : $i = 1; ?>
				<?php while ( $products->have_posts() ) : $products->the_post(); ?>
				<div class="plugin">
					<div class="product-image">
						<?php if ( has_post_thumbnail() ) { ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'product-img' ); ?>
							</a>
						<?php } ?>
					</div>
					<div class="product-description">
						<a class="product-title" href="<?php the_permalink(); ?>">
							<?php the_title( '<h3>', '</h3>' ); ?>
						</a>
						<div class="product-info">
							<?php the_excerpt(); ?>
							<a class="button view-details" href="<?php the_permalink(); ?>">View Details</a>
						</div>
					</div>
				</div>
				<?php $i+=1; ?>
				<?php endwhile; ?>

				<div class="store-pagination">
					<?php 					
						$big = 999999999; // need an unlikely intege					
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, $current_page ),
							'total' => $products->max_num_pages
						) );
					?>
				</div>
				<?php else : ?>
			
				<h2 class="center"><?php _e( 'Not Found', 'pp' ); ?></h2>
				<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'pp' ); ?></p>
				<?php get_search_form(); ?>
			
			<?php endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
