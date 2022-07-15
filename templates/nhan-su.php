<?php // @codingStandardsIgnoreLine
/**
	Template Name: Đội ngũ nhân sự
 */
get_header( );
?>
<main id="primary" class="site-main">

<?php
while ( have_posts() ) :
	the_post();
	$nhan_su = rwmb_meta('nhan_su');
	get_template_part( 'template-parts/home/breadcrumbs' );
	?>
	<section class="nhan-su">
		<div class="container">
			<?php the_content();?>
			<div class="nhan-su__wrap row">
				<?php
				foreach($nhan_su as $value) {
					$image = $value['image'];
					$name = $value['ten'];
					$chuc_vu = $value['chuc_vu'];
					?>
					<div class="nhan-su__item col-4">
						<div class="nhan-su__inner">
							<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $name?>">
							<div class="nhan-su__content">
								<h3><?= $name;?></h3>
								<p><?= $chuc_vu;?></p>
							</div>
						</div>
					</div>
					<?php
				}
				?>
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
