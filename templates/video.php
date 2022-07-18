<?php // @codingStandardsIgnoreLine
/**
	Template Name: Video
 */
get_header( );
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/home/breadcrumbs' );
		get_template_part( 'template-parts/about-us/video' );
		get_template_part( 'template-parts/home/khac-biet' );
		
	endwhile;
	?>

</main>
<?php

get_footer();
