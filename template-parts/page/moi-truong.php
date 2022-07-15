<?php
$title_mt = rwmb_meta('title');
$moi_trương = rwmb_meta('moi_truong');
?>
<section class="moi-truong">
	<div class="container">
		<h2 class="title"><?= $title_mt;?></h2>
		<div class="moi-truong__wrap row">
			<?php 
			foreach($moi_trương as $value) :
				$image = $value['image'];
				$title = $value['title'];
				$content = $value['content'];
				?>
				<div class="moi-truong__item col-6">
					<div class="moi-truong__inner">
						<div class="moi-truong__image">
							<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="">
						</div>
						<div class="moi-truong__content">
							<h3><?= $title;?></h3>
							<?= wpautop($content);?>
						</div>
					</div>
				</div>
				<?php
			endforeach;	
			?>
		</div>
	</div>
</section>