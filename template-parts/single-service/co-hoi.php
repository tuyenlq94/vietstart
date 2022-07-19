<?php
$title_ch = rwmb_meta('title_tong_the');
$content_lt = rwmb_meta('noi_dung');
$content_th = rwmb_meta('content_tong_the');
?>
<section class="co-hoi">
	<div class="container">
		<h2 class="title"><?= $title_ch;?></h2>
		<div class="co-hoi__wrap row">
			<div class="co-hoi__item col-6"><?= wpautop($content_lt);?></div>
			<div class="co-hoi__item col-6"><?= wpautop($content_th);?></div>
		</div>
	</div>
</section>