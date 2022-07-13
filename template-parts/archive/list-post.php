<?php
if ( have_posts( ) ) :
	?>
	<div class="archive-post__list--inner">
		<?php
		while ( have_posts( ) ) :
			the_post(  );
			vietstart_list_post();
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