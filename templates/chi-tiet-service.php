<?php // @codingStandardsIgnoreLine
/**
	Template Name: Chi tiết dịch vụ 2
 */
get_header();
?>
<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
		get_template_part('template-parts/service/banner2');
		get_template_part('template-parts/service/single2');
		get_template_part('template-parts/home/breadcrumbs');
		get_template_part('template-parts/home/danh-gia');
		get_template_part('template-parts/home/khac-biet');
		get_template_part('template-parts/home/doi-tac');
	endwhile;
	?>

</main>
<?php

get_footer();
