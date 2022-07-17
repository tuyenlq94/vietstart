<?php
$title_dv = rwmb_meta('title_noi_bat');
$services = rwmb_meta('services');
?>
<section class="service">
	<div class="container">
		<h2 class="title"><?= $title_dv; ?></h2>
		<div class="service__wrap">
			<?php
			foreach ($services as $service) :
				$image = $service['image'];
				$title = $service['title'];
				$title_s = $service['title_s'];
				$link = $service['link'];
			?>
				<div class="service__item">
					<div class="service__image">
						<a href="<?= $link; ?>"><img src="<?= wp_get_attachment_image_url($image, 'full', false) ?>" alt=""></a>
					</div>
					<div class="service__content">
						<a href="<?= $link; ?>">
							<span class="s-text"><?= $title_s; ?></span>
							<span class="l-text"><?= $title; ?></span>
						</a>
					</div>
				</div>
			<?php
			endforeach;
			?>
		</div>
	</div>
</section>