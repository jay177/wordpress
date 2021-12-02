<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ping
 */

get_header();
$all = get_fields();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', get_post_type() );
			

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ping-pong' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ping-pong' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			
		endwhile; // End of the loop.

		
		?>
		<ul>
            <li>Rapidité : <?=$all['rapidite'] ?></li>
            <li>Contrôle : <?=$all['controle'] ?></li>
            <li>Adhérence : <?=$all['adherence'] ?></li>
            <li>Dureté : <?=$all['durete'] ?></li>
            <?php
                if ($all['energie'] == 1):?>
                    <li>Energie : <img src="<?php echo get_template_directory_uri(); ?>/img/checked.png" alt="checked"></li>
            <?php
                else: ?>
                    <li>Energie : <img src="<?php echo get_template_directory_uri(); ?>/img/cancel.png" alt="checked"></li>
            <?php endif; ?>
        </ul>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
