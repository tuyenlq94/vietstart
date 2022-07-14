<?php 
$image = rwmb_meta('image_background_tn');
$content = rwmb_meta('content_tuyen_ngon');
?>
<section class="tuyenngon" style="background-image: url(<?= $image['full_url']?>);">
	<div class="container">
		<?= wpautop($content);?>
	</div>
</section>