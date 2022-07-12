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
		get_template_part( 'template-parts/home/we-do' );
		get_template_part( 'template-parts/home/projects' );
		get_template_part( 'template-parts/home/partner' );
	endwhile;
	?>

</main>
<?php

get_footer();
