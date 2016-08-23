<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WINSIDER
 */

?>
	<footer class="bg-black" role="contentinfo">
		<div class="col-12 sm-col-10 mx-auto">
			<div class="flex justify-between items-center py2">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-decoration-none"><h1 class="h2 white ml1 my2 fw-700"><?php bloginfo( 'name' ); ?></h1></a>
				<div>
					<nav class="inline-block h5">
						<?php echo strip_tags(wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '', 'link_before' => '', 'items_wrap' => '%3$s', 'container' => false , 'echo' => false) ), '<a><div>'); ?>
					</nav>
					<div class="inline-block white bold h6 pl2"><?php bloginfo( 'name' ); ?> 2016</div>
				</div>
			</div>
		</div>
	</footer>


<?php wp_footer(); ?>

</body>
</html>
