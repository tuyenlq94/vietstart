<?php
$args    = array(
	'post_type' => 'page',
	'pagename' => 'quy-trinh-san-xuat',
);
$the_query     = new WP_Query( $args );
if( $the_query->have_posts()) :
	while($the_query->have_posts()) :
		$the_query->the_post();
		$cam_ket = rwmb_meta('cam_ket');
		$mo_ta = rwmb_meta('mo_ta');
		?>
<section class="cam-ket">
	<div class="container">
		<h2 class="title"><?php the_title();?></h2>
		<p class="descrip"><?= $mo_ta;?></p>
		<div class="cam-ket__wrap">
			<?php
			foreach ($cam_ket as $value) :
				$title = $value['title'];
				$content = $value['content'];
				?>
				<div class="cam-ket__item">
					<h3><?= $title;?></h3>
					<?= wpautop($content);?>
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
