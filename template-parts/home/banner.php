<?php
$banners     = rwmb_meta( 'banner' );
$form_tu_van = rwmb_meta( 'form_tu_van', [ 'object_type' => 'setting' ], 'popup_tuvan' );
?>
<section class="banner">
	<?php
	$i = 1;
	foreach ( $banners as $banner ) :
		$bg_image    = $banner['background'];
		$title       = $banner['title'];
		$description = $banner['description'];
		$image       = $banner['image'];
		?>
		<div class="banner-item">
			<?php
			if ( empty( $image ) ) {
				?>
				<div class="banner-item__inner item_<?= $i;?>">
					<div class="container">
						<div class="banner-item__content">
							<h2 class="title fadeInDown wow" data-wow-duration="0.5s" data-wow-delay="0s"><?= $title;?></h2>
							<p><?= $description;?></p>
							<div class="popup-tu-van ">
								<a class="popup-with-form" href="#test-form"><span class="wrapper"><span>Đăng ký tư vấn</span></span></a>
								<div id="test-form"><?= do_shortcode( $form_tu_van )?></div>
							</div>
						</div>
					</div>
					<div class="banner-item__background" style="background-image: url(<?= wp_get_attachment_image_url( $bg_image, 'full', false )?>);"></div>
				</div>
				<?php
			} else {
				?>
				<div class="banner-item__inner">
					<div class="container">
						<img src="<?= wp_get_attachment_image_url( $image, 'full', false );?>" alt="">
					</div>
				</div>
				<?php
			}
			?>
		</div>
		<?php
		$i++;
	endforeach;
	?>
</section>
