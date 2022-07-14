<?php
$visions = rwmb_meta('tam_nhin_su_menh');
$title_gia_tri = rwmb_meta('title_gia_tri');
$giatri = rwmb_meta('gia_tri_cot_loi');
?>
<section class="vision">
	<div class="container">
		<?php
		foreach($visions as $value) {
			$image = $value['image'];
			$title = $value['title'];
			$content = $value['mo_ta'];
			?>
			<div class="vision__item">
				<img class="icon_cd" src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $title?>">
				<div class="entry-content">
					<h2><?= $title;?></h2>
					<?= wpautop($content);?>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</section>
<section class="giatri">
	<div class="container">
		<h2 class="title"><?= wpautop($title_gia_tri);?></h2>
		<div class="giatri__wrap row">
			<?php
			foreach($giatri as $value) {
				$image = $value['image'];
				$title = $value['title'];
				$content = $value['content'];
				?>
				<div class="giatri__item col-6">
					<div class="giatri__inner">
						<div class="giatri__image">
						<img class="icon_cd" src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $title?>">
						</div>
						<div class="giatri__content">
							<h3><?= $title;?></h3>
							<?= wpautop($content);?>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>