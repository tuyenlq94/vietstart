<?php
$about = rwmb_meta('gioi_thieu');
?>
<section class="about">
	<div class="container">
		<?= wp_kses_post(wpautop($about));?>
	</div>
</section>