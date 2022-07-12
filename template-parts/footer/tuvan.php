<?php
$title_tuvan = rwmb_meta( 'title_tu_van', [ 'object_type' => 'setting' ], 'popup_tuvan' );
$mo_ta       = rwmb_meta( 'mo_ta', [ 'object_type' => 'setting' ], 'popup_tuvan' );
$form_tu_van = rwmb_meta( 'form_tu_van', [ 'object_type' => 'setting' ], 'popup_tuvan' );
?>
<div class="tu-van">
	<div class="container">
		<div class="tu-van__wrap">
			<h2><?= esc_html( $title_tuvan );?></h2>
			<p><?= esc_html( $mo_ta );?></p>
			<div class="popup-tu-van">
				<a class="popup-with-form" href="#test-form"><span class="wrapper"><span>Đăng ký tư vấn</span></span></a>
				<div id="test-form"><?= do_shortcode( $form_tu_van )?></div>
			</div>
		</div>
	</div>
</div>
