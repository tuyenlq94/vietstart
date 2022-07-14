<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vietstart
 */

get_header();
	get_template_part( 'template-parts/home/breadcrumbs' );
	?>
	<main id="primary" class="site-main archive-post">
		<div class="container">
			<div class="row">
				<div class="archive-post__list col-8">
					<?php get_template_part( 'template-parts/archive/list-product' ); ?>
				</div>
				<div class="archive-post__sidebar col-4">
				<?php get_sidebar( )?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
	<?php
	get_template_part( 'template-parts/home/danh-gia' );
	get_template_part( 'template-parts/home/khac-biet' );
	get_template_part( 'template-parts/home/doi-tac' );
get_footer();
