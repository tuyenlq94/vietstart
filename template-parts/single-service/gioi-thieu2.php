<?php
$image_about = rwmb_meta('image_gioi_thieu');
$content_about = rwmb_meta('content_gioi_thieu');
$video = rwmb_meta('video_gioi_thieu');
if(strpos($video,'=')){
	$idvideo = substr($video, strpos($video,'=')+1,11);
}else{
	$idvideo = substr($video, strpos($video,'embed')+6,11);
};
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
					<?= wp_kses_post(wpautop($content_about))?>
					<?php
					if( $video != '' ) {
						?>
						<iframe width="831" height="467" src="https://www.youtube.com/embed/<?= $idvideo ?>"
						title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
						<?php
					}
					?>
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
<?php get_template_part('template-parts/single-service/chien-dich');?>
<?php get_template_part('template-parts/single-service/co-hoi');?>
<?php get_template_part('template-parts/single-service/why2');?>
<?php get_template_part('template-parts/single-service/loi-ich2');?>