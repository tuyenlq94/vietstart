<?php
$services    = rwmb_meta( 'service' );
$gioi_thieu  = rwmb_meta( 'gioi_thieu_dich_vu' );
$img_video   = rwmb_meta( 'image_service' );
$link_video  = rwmb_meta( 'link_video' );
$form_tu_van = rwmb_meta( 'form_tu_van', [ 'object_type' => 'setting' ], 'popup_tuvan' );
?>
<section class="services">
	<div class="container">
		<div class="services__wrap">
			<?php
			foreach ( $services as $service ) :
				$image  = $service['image'];
				$text_1 = $service['text_1'];
				$text_2 = $service['text_2'];
				$link   = $service['link'];
				?>
				<div class="services__item">
					<a href="<?= esc_attr( $link );?>">
						<img src="<?= wp_get_attachment_image_url( $image, 'full', false );?>" alt="<?= $text_1;
						echo $text_2;?>">
						<span class="s-text"><?= esc_html( $text_1 );?></span>
						<span class="l-text"><?= esc_html( $text_2 );?></span>
					</a>
				</div>
				<?php
			endforeach;
			?>
		</div>
		<div class="services__inner row">
			<div class="services__about col-4">
				<?= wp_kses_post( wpautop( $gioi_thieu ) );?>
				<div class="popup-tu-van ">
					<a class="popup-with-form" href="#test-form"><span class="wrapper"><span>Đăng ký tư vấn</span></span></a>
					<div id="test-form"><?= do_shortcode( $form_tu_van )?></div>
				</div>
			</div>
			<div class="services__video col-8">
				<a class="popup-youtube" href="<?= esc_attr( $link_video );?>">
					<img src="<?= esc_attr( $img_video['full_url'] )?>" alt="">
				</a>
			</div>
		</div>
	</div>
</section>
