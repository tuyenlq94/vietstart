<?php
$image = rwmb_meta('image_background');
$title = rwmb_meta('title');
$mo_ta = rwmb_meta('mo_ta');
$form_tu_van = rwmb_meta( 'form_tu_van', [ 'object_type' => 'setting' ], 'popup_tuvan' );
?>
<section class="banner-blog banner-item">
	<div class="banner-item__inner item_<?= $i;?>">
		<div class="container">
			<div class="banner-item__content">
				<h2 class="title fadeInDown wow" data-wow-duration="0.5s" data-wow-delay="0s"><?= $title;?></h2>
				<p><?= $mo_ta;?></p>
				<div class="popup-tu-van ">
					<a class="popup-with-form" href="#test-form"><span class="wrapper"><span>Đăng ký tư vấn</span></span></a>
					<div id="test-form"><?= do_shortcode( $form_tu_van )?></div>
				</div>
			</div>
		</div>
		<div class="banner-item__background" style="background-image: url(<?= $image['full_url'];?>);"></div>
	</div>
</section>