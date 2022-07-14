<?php
$title_cd = rwmb_meta('title_cd');
$history = rwmb_meta('history');
?>
<section class="chang-duong">
	<div class="container">
		<h2 class="title"><?= $title_cd;?></h2>
		<div class="chang-duong__wrap row">
			<?php
			foreach ($history as $key => $value) {
				$year = $value['nam'];
				$image = $value['image'];
				$title = $value['title'];
				?>
				<div class="chang-duong__item col-3">
					<div class="chang-duong__content">
						<h2><?= $year;?></h2>
						<img class="icon_cd" src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $title?>">
						<h3><?= $title?></h3>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>