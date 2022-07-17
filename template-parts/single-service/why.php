<?php
$title_why = rwmb_meta('title_tai_sao');
$mota = rwmb_meta('mo_ta_tai_sao');
$why = rwmb_meta('group_tai_sao');
$title_luu_y = rwmb_meta('title_luu_y');
$content_luu_y = rwmb_meta('content_luu_y');
?>
<section class="tai-sao">
	<div class="container">
		<h2 class="title"><?= $title_why;?></h2>
		<p class="descrip"><?= $mota;?></p>
		<div class="tai-sao__wrap">
			<?php
			foreach($why as $value) :
				$title = $value['title'];
				$content = $value['content'];
				?>
				<div class="tai-sao__item">
					<h3><?= $title;?></h3>
					<?= wpautop($content);?>
				</div>
				<?php
			endforeach;
			?>
		</div>
		<div class="tai-sao__inner">
			<h3><?= $title_luu_y;?></h3>
			<?= wpautop($content_luu_y);?>
		</div>
	</div>
</section>