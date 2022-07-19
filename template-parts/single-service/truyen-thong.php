<?php
$ke_hoach = rwmb_meta('ke_hoach');
$title_tai_sao = rwmb_meta('title_tai_sao_lkh');
$lap_ke_hoach = rwmb_meta('lap_ke_hoach');
$title_lkh = rwmb_meta('title_lkh');
$mo_ta_lkh = rwmb_meta('mo_ta_lkh');
$cac_buoc = rwmb_meta('cac_buoc_lkh');
?>
<section class="ke-hoach">
	<div class="container">
		<?= wpautop($ke_hoach);?>
	</div>
</section>
<section class="why_lkh">
	<div class="container">
		<h2 class="title"><?=$title_tai_sao;?></h2>
		<div class="why_lkh__wrap row">
			<?php
			foreach($lap_ke_hoach as $value) {
				$image = $value['image'];
				$content = $value['content'];
				?>
				<div class="why_lkh__item col-4">
					<div class="why_lkh__inner">
						<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $title_ly_do?>">
						<?= wpautop($content);?>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
<section class="buoc-lkh">
	<div class="container">
		<h2 class="title"><?= $title_lkh;?></h2>
		<p class="descrip"><?= $mo_ta_lkh;?></p>
		<div class="buoc-lkh__wrap">
			<?php
			foreach($cac_buoc as $value) {
				$image = $value['image'];
				$content = $value['content'];
				?>
				<div class="buoc-lkh__item row">
					<div class="buoc-lkh__image col-6">
						<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $title_ly_do?>">
					</div>
					<div class="buoc-lkh__content col-6">
						<?= wpautop($content);?>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>