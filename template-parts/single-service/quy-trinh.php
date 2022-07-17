<?php
$args    = array(
	'post_type' => 'page',
	'pagename' => 'quy-trinh-san-xuat',
);
$the_query     = new WP_Query( $args );
if( $the_query->have_posts()) :
	while($the_query->have_posts()) :
		$the_query->the_post();
		$quy_trinh = rwmb_meta('quy_trinh');
		?>
<section class="quy_trinh">
	<div class="container">
		<h2 class="title"><?php the_title();?></h2>
		<div class="quy_trinh__wrap row">
			<div class="quy_trinh__inner col-6">
				<?php
				$i = 1;
				foreach($quy_trinh as $value) :
					$title = $value['title'];
					$content = $value['content'];
					if( $i <= 4 ) :
					?>
					<div class="quy-trinh__item quy_trinh__<?= $i;?>">
						<div class="steps">
							<p>Bước</p>
							<p><?= $i; ?></p>
						</div>
						<div class="steps-content">
							<h3><?= $title; ?></h3>
							<?= wpautop($content); ?>
						</div>
					</div>
					<?php
					endif;
					$i++;
				endforeach;
				?>
			</div>
			<div class="quy_trinh__inner inner_right col-6">
				<?php
				$i = 1;
				foreach($quy_trinh as $value) :
					$title = $value['title'];
					$content = $value['content'];
					if( $i > 4 ) :
					?>
					<div class="quy-trinh__item quy_trinh__<?= $i;?>">
						<div class="steps">
							<p>Bước</p>
							<p><?= $i; ?></p>
						</div>
						<div class="steps-content">
							<h3><?= $title; ?></h3>
							<?= wpautop($content); ?>
						</div>
					</div>
					<?php
					endif;
					$i++;
				endforeach;
				?>
				<div class="quy-trinh__item quy_trinh__8">
					<div class="steps"></div>
					<div class="steps-content">
						<h3>Trao đổi với khách hàng <br>để thực hiện dự án tiếp theo</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
		<?php
	endwhile;
endif;
wp_reset_postdata();
?>
