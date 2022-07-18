<button class="search-open header-icon" aria-expanded="false">
	<?php
	Vietstart_Icons::render( 'search' );
	?>
</button>
<div class="header-search">
	<div class="header-search__form">
		<?php get_search_form(); ?>
	</div>
</div>
<div class="languages">
	<?php dynamic_sidebar( 'languages' ); ?>
</div>
