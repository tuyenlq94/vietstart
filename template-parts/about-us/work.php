<?php 
$title = rwmb_meta('title_lam_gi');
$works = rwmb_meta('work');
?>
<section class="work">
	<div class="container">
		<h2 class="title"><?= $title;?></h2>
		<div class="work__wrap row">
			<?php
			foreach($works as $work) :
				$name = $work['title'];
				$content = $work['content'];
			?>
			<div class="work__item col-4">
				<h3><?= $name;?></h3>
				<?= wpautop($content);?>
			</div>
			<?php
			endforeach;
			?>
		</div>
	</div>
</section>