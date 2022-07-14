<?php // @codingStandardsIgnoreLine
/**
	Template Name: Giới thiệu
 */
get_header( );
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/about-us/banner' );
		get_template_part( 'template-parts/about-us/menu' );
		get_template_part( 'template-parts/about-us/gioi-thieu' );
		get_template_part( 'template-parts/about-us/work' );
		get_template_part( 'template-parts/home/khac-biet' );
		get_template_part( 'template-parts/about-us/chang-duong' );
		get_template_part( 'template-parts/about-us/vision' );
		get_template_part( 'template-parts/about-us/y-nghia' );
		get_template_part( 'template-parts/about-us/tuyen-ngon' );
		get_template_part( 'template-parts/home/danh-gia' );
		get_template_part( 'template-parts/home/doi-tac' );
		get_template_part( 'template-parts/about-us/nhan-su' );
		
	endwhile;
	?>

</main>
<?php

get_footer();
