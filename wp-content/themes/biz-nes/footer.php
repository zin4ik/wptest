<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biznes
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa sed, similique magnam nulla maiores expedita voluptatem labore ratione ipsum commodi provident corrupti quae deserunt quibusdam debitis doloribus. Error, consectetur tenetur.</p>
	<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa sed, similique magnam nulla maiores expedita voluptatem labore ratione ipsum commodi provident corrupti quae deserunt quibusdam debitis doloribus. Error, consectetur tenetur.</p>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'biz-nes' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'biz-nes' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'biz-nes' ), 'biz-nes', '<a href="http://underscores.me/">Zin4ik</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
