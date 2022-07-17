<?php // @codingStandardsIgnoreLine
/**
	Template Name: Tuyển dụng
 */
get_header();
?>
<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
		get_template_part('template-parts/page/banner');
		get_template_part('template-parts/page/moi-truong');
		get_template_part('template-parts/page/chuyen-nghiep');
		get_template_part('template-parts/page/luong-thuong');
		get_template_part('template-parts/page/form-ung-tuyen');
		get_template_part('template-parts/page/tuyen-dung');
		get_template_part('template-parts/page/quy-trinh');
		get_template_part('template-parts/page/form-ung-tuyen');
		get_template_part('template-parts/home/khac-biet');

	endwhile;
	?>

</main>
<?php

get_footer();
