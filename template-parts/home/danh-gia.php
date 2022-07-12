<?php
$title = rwmb_meta( 'title', [ 'object_type' => 'setting' ], 'danh_gia' );
$customers = rwmb_meta( 'khach_hang', [ 'object_type' => 'setting' ], 'danh_gia' );
?>
<section class="customers">
	<div class="container">
		<h2 class="titles"><?= $title;?></h2>
		<div class="customers__wrap">
			<?php
			foreach ($customers as $customer) {
				$image = $customer['image'];
				$name = $customer['name'];
				$chuc_vu = $customer['chuc_vu'];
				$content = $customer['khach_hang_danh_gia'];
				?>
				<div class="customers__item">
					<div class="customers__item--content">
						<div class="customers__top">
							<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="">
							<div class="customers__name">
								<span class="name"><?= $name;?></span>
								<span class="chuc_vu"><?= $chuc_vu;?></span>
							</div>
						</div>
						<div class="customers__content"><?= $content;?></div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>