<?php
$title_products = rwmb_meta('title_products');
$loai_san_pham = rwmb_meta('loai_san_pham');
?>
<section class="products">
	<div class="container">
		<h2 class="titles"><?= $title_products;?></h2>
		<div class="products__wrap">
			<ul class="tabs adress-show" id="tab">
			<?php
			$i = 1;
			foreach ($loai_san_pham as $value) {
				$name_product = $value->name;
				$id_product = $value->term_id;
				if ($i === 1) {
					$current = 'current';
				} else {
					$current = '';
				}
			?>
				<li class="tab-link <?= $current; ?>" data-tab="tab_<?= $i; ?>">
					<p class="address-content"><?= $name_product; ?></p>
				</li>
			<?php
				$i++;
			}
			?>
			</ul>
			<div id="tab-content">
			<?php
			$j = 1;
			foreach ($loai_san_pham as $value) {
				$name_product = $value->name;
				$id_product = $value->term_id;
				if ($j === 1) {
					$current = 'current';
				} else {
					$current = '';
				}
			?>
				<div id="tab_<?= $j; ?>" class="tab-content <?= $current; ?>">
					<div class="products__inner">
						<?php
						vietstart_list_product($id_product);
						?>
					</div>
					<a href="<?= get_term_link($id_product);?>" class="term_link">Xem thêm</a>
				</div>
			<?php
				$j++;
			}
			?>
			</div>
		</div>
	</div>
</section>