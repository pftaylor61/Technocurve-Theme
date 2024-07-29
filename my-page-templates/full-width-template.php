<?php
/**
 * /*
 * Template Name: Full Width Template
 * 
 * Page template without sidebar
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package technocurve-theme
 */

get_header();
?>

	<div id="primary">
		<main id="main" class="page-main">

		<?php
		susty_wp_post_thumbnail();

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

                <!<!-- This is where the SidebaR code used to be -->

	</div><!-- #primary -->
<?php
get_footer();
