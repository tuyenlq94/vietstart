<nav id="site-blog" class="main-navigation menu-blog">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-2',
			'menu_id'        => 'blog-menu',
			'container'      => false,
		)
	);
	?>
</nav>