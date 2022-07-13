<?php
$images = rwmb_meta( 'image_doi_tac', [ 'object_type' => 'setting' ], 'danh_gia' );
?>
<section class="partner">
	<div class="container">
		<div class="partner__wrap">
			<?php
			foreach ( $images as $image ) {
				$img_url = $image['full_url'];
				echo '<div class="partner__item">';
				echo '<img src="' . $img_url . '" alt="" >';
				echo '</div>';
			}
			?>
		</div>
	</div>
</section>
