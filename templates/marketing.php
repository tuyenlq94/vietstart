<?php // @codingStandardsIgnoreLine
/**
	Template Name: Marketing
 */
get_header();
?>
<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
		get_template_part('template-parts/service/banner-child');
		get_template_part('template-parts/service/service-marketing');

		get_template_part('template-parts/home/breadcrumbs');
		get_template_part('template-parts/home/danh-gia');
		get_template_part('template-parts/home/khac-biet');
		get_template_part('template-parts/home/doi-tac');
	endwhile;
	?>

</main>
<?php

get_footer();
