<?php
$image_about = rwmb_meta('image_gioi_thieu');
$content_about = rwmb_meta('content_gioi_thieu');
?>
<section class="about-service">
	<div class="container">
		<div class="about-service__content">
			<?php the_content();?>
		</div>
	</div>
</section>
<section class="about-single">
	<div class="container">
		<div class="about-single__wrap row">
			<div class="about-single__item col-6">
				<img src="<?= $image_about['full_url']?>" alt="">
			</div>
			<div class="about-single__item col-6">
				<div class="about-single__content">
					<?= wpautop($content_about);?>
				</div>
			</div>
		</div>
		<div class="popup-tu-van ">
			<a class="popup-with-form" href="#test-form">
				<span class="wrapper">
					<span><?php
					if ( get_locale() == 'vi' ) {
						echo 'Đăng ký tư vấn';
					} else {
						echo 'Sign up for a consultation';
					}
					?>
					</span>
				</span>
			</a>
			<div id="test-form"><?= do_shortcode($form_tu_van) ?></div>
		</div>
	</div>
</section>
<?php get_template_part('template-parts/single-service/loi-ich');?>
<?php get_template_part('template-parts/single-service/dich-vu');?>