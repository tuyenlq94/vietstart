<button class="search-open header-icon" aria-expanded="false">
	<?php
	Vietstart_Icons::render( 'search' );
	?>
</button>
<div class="header-search">
	<div class="header-search__form">
		<?php get_search_form(); ?>
		<button class="search-close header-icon">
			<span class="screen-reader-text">Close</span>
			×
		</button>
	</div>
</div>
<div class="languages">
	<?php dynamic_sidebar( 'languages' ); ?>
</div>
