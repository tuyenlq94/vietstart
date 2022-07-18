<?php
$args = array( 
	'post_type' => 'post',
	'category_name' => 'video-noi-bo',
	'posts_per_page' => -1,
);
$the_query = new WP_Query( $args );
?>
<section class="video-noibo">
	<div class="container">
		<div class="row">
			<?php
			if($the_query->have_posts()) :
				while ($the_query->have_posts()) :
					$the_query->the_post();
					$video = rwmb_meta('link_video_youtube');
					if(strpos($video,'=')){
						$idvideo = substr($video, strpos($video,'=')+1,11);
					}else{
						$idvideo = substr($video, strpos($video,'embed')+6,11);
					};
					?>
					<div class="video-noibo__item col-4">
						<iframe width="831" height="467" src="https://www.youtube.com/embed/<?= $idvideo ?>"
							title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen>
						</iframe>
						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						<p class="date"><?= get_the_date('d F Y');?></p>
						<a href="<?php the_permalink()?>" class="see-more">Xem thêm ...</a>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>