<?php
$form = rwmb_meta('form_lien_he');
$maps = rwmb_meta('maps');
?>
<section class="contact">
	<div class="container">
		<div class="contact__wrap">
			<div class="contact__content">
				<?php the_content();?>
			</div>
			<div class="contact__form">
				<?= do_shortcode( $form );?>
			</div>
		</div>
	</div>
	<div class="maps"><?= do_shortcode( $maps )?></div>
</section>