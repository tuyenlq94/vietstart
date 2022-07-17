<?php
$titlle_qt = rwmb_meta('title_quy_trinh');
$quy_trinh = rwmb_meta('quy_trinh');
$images = rwmb_meta('image_tuyen_dung');
?>
<secrion class="quy-trinh">
	<div class="container">
		<h2 class="title"><?= $titlle_qt; ?></h2>
		<div class="quy-trinh__wrap">
			<?php
			$i = 1;
			foreach ($quy_trinh as $value) :
				$title = $value['title'];
				$content = $value['content'];
			?>
				<div class="quy-trinh__item">
					<div class="steps">
						<p>Bước</p>
						<p><?= $i; ?></p>
					</div>
					<div class="steps-content">
						<h3><?= $title; ?></h3>
						<?= wpautop($content); ?>
					</div>
				</div>
			<?php
				$i++;
			endforeach;
			?>
		</div>
		<div class="quy-trinh__inner popup-gallery">
			<?php
			foreach ($images as $image) {
			?>
				<a href="<?= $image['full_url'] ?>"> <img src="<?= $image['full_url'] ?>" alt=""></a>
			<?php
			}
			?>
		</div>
	</div>
</secrion>