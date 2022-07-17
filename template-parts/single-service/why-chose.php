<?php
$args    = array(
	'post_type' => 'page',
	'pagename' => '12-ly-do-chon-vietstarmax',
);
$the_query     = new WP_Query( $args );
if( $the_query->have_posts()) :
	while($the_query->have_posts()) :
		$the_query->the_post();
		$title_ly_do = rwmb_meta('title_ly_do');
		$ly_do = rwmb_meta('ly_do');
		?>
<section class="ly-do">
	<div class="container">
		<h2 class="title"><?= $title_ly_do;?></h2>
		<div class="ly-do__wrap row">
			<?php
			foreach($ly_do as $value):
				$image = $value['image'];
				$number = $value['number'];
				$content = $value['content'];
				?>
				<div class="ly-do__item col-6">
					<div class="ly-do__detail">
						<div class="ly-do__image">
							<img src="<?= wp_get_attachment_image_url( $image, 'full', false )?>" alt="<?= $title_ly_do?>">
						</div>
						<div class="ly-do__content">
							<p><span><?= $number;?></span> <?= $content;?></p>
						</div>
					</div>
				</div>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>
		<?php
	endwhile;
endif;
wp_reset_postdata();
?>
