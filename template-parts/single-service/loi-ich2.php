<?php
$title_qt = rwmb_meta('title_qt');
$quy_trinh = rwmb_meta('group_qt');
if( empty($title_qt)) {

}else {
?>
<section class="loi-ich-service">
	<div class="container">
		<div class="loi-ich__wrap row">
			<div class="loi-ich__content">
				<div class="loi-ich-service__inner">
					<h2><?=$title_qt?></h2>
				<?php
				foreach($quy_trinh as $value) :
					$title = $value['content'];
					?>
						<p><?= $title;?></p>
					<?php
				endforeach;
				?>
				</div>
			</div>
			
		</div>
	</div>
</section>
<?php
}
?>