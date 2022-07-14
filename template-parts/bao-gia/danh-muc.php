<?php 
$title = rwmb_meta('title_danh_muc');
$danh_muc_gia = rwmb_meta('danh_muc_gia');
?>
<section class="price">
	<div class="container">
		<h2 class="title"><?= $title;?></h2>
		<div class="price__wrap">
			<?php
			foreach($danh_muc_gia as $value) :
				$image = $value['image'];
				$name = $value['name'];
				$url = $value['link'];
				?>
				<div class="price__item">
					<a href="<?= $url;?>">
						<img src="<?= wp_get_attachment_image_url( $image, 'full', false );?>" alt="">
						<span><?= $name;?></span>
					</a>
				</div>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>