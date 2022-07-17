<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Vietstart
 */

get_header();
get_template_part( 'template-parts/home/breadcrumbs' );
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="single-post row">
				<div class="col-8 single-post__content">
				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile; // End of the loop.
					?>
				</div>
				<div class="col-4 single-post__sidebar">
				<?php get_sidebar( )?>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_template_part( 'template-parts/home/khac-biet' );
get_footer();
