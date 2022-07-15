<?php
$video = rwmb_meta('video');
foreach ($video as $value) {
	$video_src = $value['src'];
}
?>
<section class="banner-video">
	<div class="container">
		<div class="banner-video__wrap row">
			<div class="banner-video__video col-8">
				<video autoplay muted loop class="banner__video">
					<source src="<?= esc_url(  $video_src  ); ?>">
				</video>
			</div>
			<div class="banner-video__title col-4">
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			</div>
		</div>
	</div>
</section>