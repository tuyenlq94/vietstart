<?php
$title_product_type = rwmb_meta('title_marketing');
$descrip = rwmb_meta('mo_ta_marketing');
$product_type = rwmb_meta('marketing_online');
?>
<section class="service-type">
	<div class="container">
		<h2 class="title"><?= $title_product_type; ?></h2>
		<p class="desciption"><?= $descrip;?></p>
		<div class="service-type__wrap row">
			<?php foreach ($product_type as $value) {
				$image = $value['image'];
				$name = $value['title'];
				$link = $value['link'];
			?>
				<div class="service-type__item col-3">
					<div class="service-type__inner">
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