<?php // @codingStandardsIgnoreLine
/**
	Template Name: Home
 */
get_header( 'home' );
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/home/banner' );
		get_template_part( 'template-parts/home/service' );
		get_template_part( 'template-parts/home/products' );
		get_template_part( 'template-parts/home/danh-gia' );
		get_template_part( 'template-parts/home/khac-biet' );
		get_template_part( 'template-parts/home/doi-tac' );
		get_template_part( 'template-parts/home/about' );
	endwhile;
	?>

</main>
<?php

get_footer();
