<?php
$args    = array(
	'post_type' => 'post',
	'category_name' => 'tuyen-dung',
	'posts_per_page' => -1,
);
$the_query     = new WP_Query( $args );
?>
<section class="tuyen-dung">
	<div class="container">
		<div class="tuyen-dung__wrap">
			<?php 
			if($the_query->have_posts()) :
				while($the_query->have_posts()) :
					$the_query->the_post();
					?>
					<div class="tuyen-dung__item">
						<a href="<?php the_permalink()?>" class="title-post"><?php the_title();?></a>
						<a href="<?php the_permalink()?>" class="ung-tuyen">Ứng tuyển ngay</a>
					</div>
					<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>