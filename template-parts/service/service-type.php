<?php
$title_product_type = rwmb_meta('title_loai_dich_vu');
$descrip = rwmb_meta('mo_ta_loai_dich_vu');
$product_type = rwmb_meta('service_type');
?>
<section class="product-type service-type">
	<div class="container">
		<h2 class="title"><?= $title_product_type; ?></h2>
		<p class="desciption"><?= $descrip;?></p>
		<div class="product-type__wrap row">
			<?php foreach ($product_type as $value) {
				$image = $value['image'];
				$name = $value['title'];
				$link = $value['link'];
			?>
				<div class="product-type__item col-4">
					<div class="product-type__inner service-type__inner">
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