<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pp
 */

?>

	</section><!-- #content -->
	<div class="clearfix"></div>

</section><!-- #page -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">

		<div class="social-media">
			<a target="_blank" href="<?php the_field('facebook', 'option'); ?>"><span><i class="fa fa-facebook"></i></span></a>
			<a target="_blank" href="<?php the_field('twitter', 'option'); ?>"><span><i class="fa fa-twitter"></i></span></a>
			<a target="_blank" href="<?php the_field('github', 'option'); ?>"><span><i class="fa fa-github"></i></span></a>			
		</div>

		<div class="address">
			<?php the_field('address', 'option'); ?>
		</div>

		<div class="phone">
			<p>t. <?php the_field('phone', 'option'); ?></p>
			<p><a href="mailto:<?php antispambot(the_field('email', 'option'), 1) ?>">e. <?php antispambot(the_field('email', 'option'), 1); ?></a></p>
		</div>

		<div class="signup">
			<p>Read our <a href="http://pixelpudu.com/terms/">Terms &amp; Conditions</a></p>
		</div>

	</div><!-- .site-info -->
</footer><!-- #colophon -->
<div id="dhtmltooltip"></div>
<?php wp_footer(); ?>
</body>
</html>
