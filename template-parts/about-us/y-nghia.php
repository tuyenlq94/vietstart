<?php
$title_yn = rwmb_meta('title_y_nghia');
$image_yn = rwmb_meta('image_y_nghia');
$content_yn = rwmb_meta('content_y_nghia');
$title_tl = rwmb_meta('title_triet_ly');
$descrip = rwmb_meta('mo_ta_tl');
$content_tl = rwmb_meta('triet_ly');
?>
<section class="ynghia">
	<div class="container">
		<h2 class="title"><?= $title_yn;?></h2>
		<div class="ynghia__wrap row">
			<div class="ynghia__content col-6">
				<?= wpautop($content_yn);?>
			</div>
			<div class="ynghia__image col-6">
				<img src="<?= $image_yn['full_url'];?>" alt="">
			</div>
		</div>
	</div>
</section>
<section class="trietly">
	<div class="container">
		<h2 class="title"><?= $title_tl;?></h2>
		<p class="descrip"><?= $descrip;?></p>
		<div class="trietly__content"><?= wpautop($content_tl);?></div>
	</div>
</section>
<?php
$title_ux = rwmb_meta('title_ung_xu');
$descrip_ux = rwmb_meta('description_ung_xu');
$content_ux = rwmb_meta('ung_xu');
?>
<section class="ungxu">
	<div class="container">
		<h2 class="title"><?= $title_ux;?></h2>
		<p class="descrip"><?= $descrip_ux;?></p>
		<div class="ungxu__content"><?= wpautop($content_ux);?></div>
	</div>
</section>