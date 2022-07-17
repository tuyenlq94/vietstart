<?php
$title = rwmb_meta('title_san_pham');
$product = rwmb_meta('san_pham');
$product_id = $product->term_id;
?>
<section class="product-service">
	<div class="container">
		<h2 class="title"><?= $title;?></h2>
		<div class="product-service__wrap">
			<?php
				vietstart_list_product($product_id);
			?>
		</div>
		<a href="<?= get_term_link($product_id);?>" class="term_link">Xem thêm</a>
	</div>
</section>