<?php
$title_lt = rwmb_meta('title_luong');
$luong_thuong = rwmb_meta('luong_thuong');
?>
<section class="luong-thuong">
	<div class="container">
		<h2 class="title"><?= $title_lt;?></h2>
		<div class="luong-thuong__wrap row">
			<?php
			foreach($luong_thuong as $value):
				$image = $value['image'];
				$content = $value['content'];
				?>
				<div class="luong-thuong__item col-4">
					<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="">
					<?= wpautop($content);?>
				</div>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>