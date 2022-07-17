<?php
$title_dv = rwmb_meta('title_dich_vu');
$image_dv = rwmb_meta('image_dich_vu');
$service = rwmb_meta('group_service');
?>
<section class="loi-ich-service">
	<div class="container">
		<h2 class="title"><?=$title_dv?></h2>
		<div class="loi-ich__wrap row">
			<div class="loi-ich__image col-6">
				<img src="<?= $image_dv['full_url']?>" alt="">
			</div>
			<div class="loi-ich__content col-6">
				<div class="loi-ich-service__inner">
				<?php
				foreach($service as $value) :
					$title = $value['title'];
					?>
						<p><?= $title;?></p>
					<?php
				endforeach;
				?>
				</div>
			</div>
			
		</div>
		<div class="popup-tu-van ">
			<a class="popup-with-form" href="#test-form">
				<span class="wrapper">
					<span><?php
					if ( get_locale() == 'vi' ) {
						echo 'Đăng ký tư vấn';
					} else {
						echo 'Sign up for a consultation';
					}
					?>
					</span>
				</span>
			</a>
			<div id="test-form"><?= do_shortcode($form_tu_van) ?></div>
		</div>
	</div>
</section>