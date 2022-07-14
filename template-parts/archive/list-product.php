<?php
if ( have_posts( ) ) :
	?>
	<?php the_archive_title('<h1 class="title-archive">', '</h1>'); ?>
	<div class="archive-post__products">
		<?php
		while ( have_posts( ) ) :
			the_post(  );
			vietstart_list_post_product();
		endwhile;
		?>
	</div>
	<?php
	the_posts_pagination([
		'mid_size'  => 1,
		'prev_text' => __('←', 'bee'),
		'next_text' => __('→', 'bee'),
	]);
endif;
?>