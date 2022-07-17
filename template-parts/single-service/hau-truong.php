<section class="hau-truong">
	<div class="container">
		<div class="hau-truong__wrap row">
<?php
$args    = array(
	'post_type' => 'post',
	'category_name' => 'hau-truong',
	'posts_per_page' => -1
);
$the_query     = new WP_Query( $args );
if( $the_query->have_posts()) :
	while($the_query->have_posts()) :
		$the_query->the_post();
		?>
			<div class="hau-truong__item col-4">
				<div class="entry-thumbnail">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
				</div>
				<div class="entry-title">
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
				</div>
			</div>
		
		<?php
	endwhile;
endif;
wp_reset_postdata();
?>
		</div>
	</div>
</section>
