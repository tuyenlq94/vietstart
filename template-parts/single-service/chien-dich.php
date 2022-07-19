<?php
$title_chien_dich = rwmb_meta('title_chien_dich');
$chien_dich = rwmb_meta('group_chien_dich');
if( empty($title_chien_dich)) {
	//continue;
} else {
?>
<section class="chien-dich-service">
	<div class="container">
		<h2 class="title"><?= $title_chien_dich;?></h2>
		<div class="chien-dich-service__wrap">
			<?php
			foreach($chien_dich as $value) {
				$title = $value['title'];
				$content = $value['content'];
				?>
				<div class="chien-dich-service__item">
					<h3><?= $title?></h3>
					<?= wpautop($content);?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
<?php
}
?>

