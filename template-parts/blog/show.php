<?php
$blog_posts = rwmb_meta('noi_bat');
$chuyen_muc = rwmb_meta('chuyen_muc_noi_bat');
$args = array( 
	'post_type' => 'post',
	'post__in' => $blog_posts,
);
$the_query = new WP_Query( $args );
?>
<section class="blog">
	<div class="container">
		<div class="row">
			<div class="blog-main col-8">
				<div class="blog__wrap">
					<?php
					if($the_query->have_posts()){
						while($the_query->have_posts()) {
							$the_query->the_post();
							vietstart_blog_post();
						}
					}
					wp_reset_postdata();
					?>
				</div>
				<div class="blog__inner">
					<?php
					foreach ($chuyen_muc as $value) {
						$id_blog = $value->term_id;
						$name_blog = $value->name;
						vietstart_blog_cat($id_blog,$name_blog);
					}
					?>
				</div>
			</div>
			<div class="blog-sidebar col-4"><?php get_sidebar( )?></div>
		</div>
	</div>
</section>