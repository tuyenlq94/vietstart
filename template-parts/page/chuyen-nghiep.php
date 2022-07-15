<?php
$image_bg = rwmb_meta('image_background');
$chuyen_nghiep = rwmb_meta('moi_truong_chuyen_nghiep');
?>
<section class="chuyen-nghiep" style="background-image: url(<?= $image_bg['full_url'];?>);">
	<div class="container">
		<div class="chuyen-nghiep__wrap">
			<?= wpautop($chuyen_nghiep);?>
		</div>
	</div>
</section>