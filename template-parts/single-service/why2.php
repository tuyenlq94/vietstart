<?php
$title_wh = rwmb_meta('title_why');
$descrip_wh = rwmb_meta('mo_ta_why');
$ly_do = rwmb_meta('ly_do');
?>
<section class="ly_do">
	<div class="container">
		<h2 class="title"><?= $title_wh;?></h2>
		<p class="descrip"><?= $descrip_wh;?></p>
		<div class="ly_do__wrap">
			<?php
			foreach($ly_do as $value) {
				$content = $value['content'];
				echo wpautop($content);
			}
			?>
		</div>
	</div>
</section>