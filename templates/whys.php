<?php // @codingStandardsIgnoreLine
/**
	Template Name: Tại sao chọn 
 */
get_header( );
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/about-us/banner' );
		get_template_part( 'template-parts/about-us/menu' );
		get_template_part( 'template-parts/about-us/why-chose' );
		get_template_part( 'template-parts/about-us/question' );
		
	endwhile;
	?>

</main>
<?php

get_footer();
