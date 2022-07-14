<?php
$about_us = rwmb_meta('about_us');
$group_about = rwmb_meta('group_about');
?>
<section class="gioi-thieu">
	<div class="container">
		<?php the_content();?>
		<div class="gioi-thieu__wrap row">
		<?php 
		foreach($about_us as $value) :
			$image = $value['image'];
			$content = $value['content'];
			?>
			<div class="gioi-thieu__item col-4">
				<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="">
				<div class="gioi-thieu__content">
					<?= wp_kses_post(wpautop($content));?>
				</div>
			</div>
			<?php
		endforeach;
		?>
		</div>
		<div class="gioi-thieu__inner row">
		<?php 
		foreach($group_about as $value) :
			$image = $value['image'];
			$content = $value['content'];
			?>
			<div class="gioi-thieu__item col-4">
				<div class="gioi-thieu__image">
					<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="">
				</div>
				<div class="gioi-thieu__content">
					<?= wp_kses_post(wpautop($content));?>
				</div>
			</div>
			<?php
		endforeach;
		?>
		</div>
	</div>
</section>