<?php
$title_product_type = rwmb_meta('title_booking');
$descrip = rwmb_meta('description_booking');
$product_type = rwmb_meta('booking_online');
?>
<section class="product-type service-type">
	<div class="container">
		<h2 class="title"><?= $title_product_type; ?></h2>
		<p class="desciption"><?= $descrip;?></p>
		<div class="product-type__wrap service-type__wrap row">
			<?php foreach ($product_type as $value) {
				$image = $value['image'];
				$name = $value['title'];
				$link = $value['link'];
			?>
				<div class="product-type__item col-4">
					<div class="product-type__inner">
						<a href="<?= $link; ?>">
							<img src="<?= wp_get_attachment_image_url($image, 'full', false) ?>" alt="">
							<h3><?= $name; ?></h3>
						</a>

					</div>
				</div>
			<?php
			} ?>
		</div>
	</div>
</section>