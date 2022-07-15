<?php
$title_form = rwmb_meta('title_form');
$descrip_form = rwmb_meta('mo_ta_form');
$form = rwmb_meta('form');
?>
<section class="form-ung-tuyen">
	<div class="container">
		<h2><?= $title_form;?></h2>
		<p><?= $descrip_form;?></p>
		<div class="popup-tu-van ">
			<a class="popup-with-form" href="#test-form"><span class="wrapper"><span>Ứng tuyển ngay</span></span></a>
			<div id="test-form"><?= do_shortcode( $form )?></div>
		</div>
	</div>
</section>