<?php 
$title_ns = rwmb_meta('title_nhan_su');
$images = rwmb_meta('image_nhan_su');
?>
<section class="nhansu">
	<div class="container">
		<h2 class="title"><?= $title_ns;?></h2>
		<div class="nhansu__wrap popup-gallery">
			<?php
			foreach($images as $image) {
				?>
				<a href="<?= $image['full_url']?>"> <img src="<?= $image['full_url']?>" alt=""></a>
				<?php
			}
			?>
		</div>
	</div>
</section>