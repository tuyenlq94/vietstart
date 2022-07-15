<?php // @codingStandardsIgnoreLine
/**
	Template Name: Đối tác
 */
get_header( );
?>
<main id="primary" class="site-main">

<?php
while ( have_posts() ) :
	the_post();
	$title_khach_hang = rwmb_meta('khach_hang');
	$customers = rwmb_meta('group_khach_hang');
	$title_doi_tac = rwmb_meta('doi_tac');
	$partner = rwmb_meta('group_doi_tac');
	get_template_part( 'template-parts/home/breadcrumbs' );
	?>
	<section class="customer">
		<div class="container">
			<h1 class="title"><?php the_title();?></h1>
			<div class="customer__partner">
				<h2><?= $title_khach_hang;?></h2>
				<div class="customer__wrap">
					<?php
					foreach($customers as $value ) {
						$image = $value['image'];
						$name = $value['name'];
						$link = $value['link_web'];
						?>
						<div class="customer__item">
							<a href="<?= $link;?>">
								<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $name?>">
								<span><?= $name?></span>
							</a>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<div class="customer__partner">
				<h2><?= $title_doi_tac;?></h2>
				<div class="customer__wrap">
					<?php
					foreach($partner as $value ) {
						$image = $value['image'];
						$name = $value['name'];
						$link = $value['link_web'];
						?>
						<div class="customer__item">
							<a href="<?= $link;?>">
								<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $name?>">
								<span><?= $name?></span>
							</a>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<?php
	get_template_part( 'template-parts/home/khac-biet' );
	
endwhile;
?>

</main>
<?php

get_footer();
