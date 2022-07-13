<?php
$title     = rwmb_meta( 'title_khac_biet', [ 'object_type' => 'setting' ], 'danh_gia' );
$image     = rwmb_meta( 'image_khac_biet', [ 'object_type' => 'setting' ], 'danh_gia' );
$khac_biet = rwmb_meta( 'su_khac_biet', [ 'object_type' => 'setting' ], 'danh_gia' );
$link      = rwmb_meta( 'link', [ 'object_type' => 'setting' ], 'danh_gia' );
?>
<section class="khac_biet">
	<div class="container">
		<h2 class="titles"><?= $title;?></h2>
		<img class="img_khac_biet" src="<?= esc_attr( $image['full_url'] );?>" alt="">
		<div class="khac_biet__wrap">
			<?php
			foreach ( $khac_biet as $value ) {
				$image   = $value['image'];
				$number  = $value['number'];
				$don_vi  = $value['don_vi'];
				$content = $value['content'];
				?>
				<div class="khac_biet__item">
					<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="">
					<div class="count_number"><span class="count"><?= esc_html( $number ); ?></span> <?= esc_html( $don_vi );?></div>
					<div class="khac_biet__content"><?= wp_kses_post( wpautop( $content ) );?></div>
				</div>
				<?php
			}
			?>
		</div>
		<a href="<?= esc_attr( $link );?>" class="seemore">Tìm hiểu thêm</a>
	</div>
</section>
