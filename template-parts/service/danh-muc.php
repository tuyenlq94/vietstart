<?php
$title_dm = rwmb_meta('title_danh_muc');
$image_sm = rwmb_meta('image_danh_muc');
$danh_muc = rwmb_meta('danh_muc');
$booking_qc = rwmb_meta('booking_qc');
$marketing_online = rwmb_meta('marketing_online');
?>
<section class="danh-muc">
	<div class="container">
		<div class="danh-muc__wrap row">
			<div class="col-6">
				<div class="danh-muc__image">
					<img src="<?= $image_sm['full_url'] ?>" alt="">
					<h2 class="title"><?= $title_dm; ?></h2>
				</div>
			</div>
			<div class="col-6">
				<div class="danh-muc__content">
					<?= wpautop($danh_muc); ?>
				</div>
			</div>
		</div>
		<div class="danh-muc__inner">
			<div class="danh-muc__content book">
				<?= wpautop($booking_qc); ?>
			</div>
			<div class="danh-muc__content marketing">
				<?= wpautop($marketing_online); ?>
			</div>
		</div>
	</div>
</section>