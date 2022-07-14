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
	endwhile;
	?>

</main>
<?php

get_footer();
