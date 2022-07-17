<?php
$title_li = rwmb_meta('title_loi_ich');
$image_li = rwmb_meta('image_loi_ich');
$loi_ich = rwmb_meta('loi_ich');
?>
<section class="loi-ich">
	<div class="container">
		<h2 class="title"><?=$title_li?></h2>
		<div class="loi-ich__wrap row">
			<div class="loi-ich__content col-6">
				<?php
				foreach($loi_ich as $value) :
					$title = $value['title'];
					$content = $value['content'];
					?>
					<div class="loi-ich__item">
						<h3><?= $title;?></h3>
						<?= wpautop($content);?>
					</div>
					<?php
				endforeach;
				?>
			</div>
			<div class="loi-ich__image col-6">
				<img src="<?= $image_li['full_url']?>" alt="">
			</div>
		</div>
	</div>
</section>