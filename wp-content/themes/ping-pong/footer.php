<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ping
 */

$img = get_field('images', 'option');

?>

	<footer id="colophon" class="site-footer">
	<div class="foot">
                <?php
                    foreach ($img as $image){?>
                        <img class="foot-single" src="<?php echo($image["image"]["url"])?>" alt="<?php echo($image["image"]["filename"])?>">
                    <?php }
                ?>
	</div>
		<div class="site-info">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'test',
				)
			);
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ping-pong' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ping-pong' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ping-pong' ), 'ping-pong', '<a href="http://underscores.me/">jarrel</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
