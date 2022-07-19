<section class="about-tongthe">
	<div class="container">
		<div class="about-tongthe__content">
			<?php the_content();?>
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
	</div>
</section>
<?php
$title_tt = rwmb_meta('title_quy_trinhg');
$image_tt = rwmb_meta('image_gioi_thieu');
$quy_trinh = rwmb_meta('group_quy_trinh');
?>
<section class="quy-trinh-tt">
	<div class="quy-trinh-tt__top">
		<div class="container">
			<h2 class="title"><?= $title_tt;?></h2>
		</div>
	</div>
	<div class="container">
		<div class="quy-trinh-tt__wrap row">
			<div class="quy-trinh-tt__inner col-3">
				<div class="quy-trinh-tt__content">
				<?php
				$i = 1;
				foreach ($quy_trinh as $value) :
					$image = $value['image'];
					$content = $value['content'];
					if($i<=3) {
						?>
						<div class="quy-trinh-tt__item">
							<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $title_ly_do?>">
							<?= wpautop($content);?>
						</div>
						<?php
					}
					$i++;
				endforeach;
				?>
				</div>
			</div>
			<div class="quy-trinh-tt__inner col-6">
				<div class="quy-trinh-tt__image">
					<img src="<?= $image_tt['full_url'];?>" alt="">
				</div>
			</div>
			<div class="quy-trinh-tt__inner col-3">
				<div class="quy-trinh-tt__content">
				<?php
				$i = 1;
				foreach ($quy_trinh as $value) :
					$image = $value['image'];
					$content = $value['content'];
					if($i>3) {
						?>
						<div class="quy-trinh-tt__item">
							<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $title_ly_do?>">
							<?= wpautop($content);?>
						</div>
						<?php
					}
					$i++;
				endforeach;
				?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
$title_hm = rwmb_meta('title_hang_muc');
$hang_muc = rwmb_meta('cac_hang_muc');
$image_hm = rwmb_meta('image_hang_muc');
?>
<section class="hang-muc">
	<div class="container">
		<h2 class="title"><?= $title_hm?></h2>
		<div class="hang-muc__wrap row">
			<div class="hang-muc__inner col-4">
				<div class="hang-muc__content content-left">
				<?php
				$i = 1;
				foreach ($hang_muc as $value) :
					$title = $value['title'];
					$link = $value['link'];
					if($i<=11) {
						?>
						<a href="<?= $link;?>" target="_blank"><?= $title;?></a>
						<?php
					}
					$i++;
				endforeach;
				?>
				</div>
			</div>
			<div class="hang-muc__inner col-4">
				<div class="hang-muc__image">
					<img src="<?= $image_hm['full_url'];?>" alt="">
				</div>
			</div>
			<div class="hang-muc__inner col-4">
				<div class="hang-muc__content content-right">
				<?php
				$i = 1;
				foreach ($hang_muc as $value) :
					$title = $value['title'];
					$link = $value['link'];
					if($i>11) {
						?>
						<a href="<?= $link;?>" target="_blank"><?= $title;?></a>
						<?php
					}
					$i++;
				endforeach;
				?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
$title_why = rwmb_meta('title_tai_sao');
$why = rwmb_meta('group_tai_sao');
?>
<section class="why-tt">
	<div class="container">
		<h2 class="title"><?= $title_why;?></h2>
		<div class="why-tt__wrap row">
			<?php
			foreach($why as $value) {
				$image = $value['image'];
				$title = $value['title'];
				$content = $value['content'];
				?>
				<div class="why-tt__item col-4">
					<div class="why-tt__inner">
						<div class="why-tt__title">
							<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $title_ly_do?>">
							<h3><?= $title;?></h3>
						</div>
						<div class="why-tt__content">
							<?= wpautop($content);?>
						</div>
					</div>
				</div>
				<?php
			}
			?>
			<div class="why-tt__item col-4">
				<div class="why-tt__inner">
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
			</div>
		</div>
	</div>
</section>
<?php
$title_cd = rwmb_meta('title_chien_dich');
$chien_dich = rwmb_meta('chien_dich');
?>
<section class="chien-dich">
	<div class="container">
		<h2 class="title"><?= $title_cd;?></h2>
		<div class="chien-dich__wrap row">
			<?php
			foreach($chien_dich as $value) {
				$title = $value['title'];
				$image = $value['image'];
				$content = $value['content'];
				$link = $value['link'];
				?>
				<div class="chien-dich__item col-4">
					<div class="chien-dich__inner">
						<div class="entry-thumbanil">
							<a href="<?= $link?>">
								<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $title_ly_do?>">
							</a>
						</div>
						<div class="entry-title">
							<a href="<?= $link?>">
								<?= $title;?>
							</a>
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