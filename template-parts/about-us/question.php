<?php
$title_question = rwmb_meta('title_cau_hoi');
$questions = rwmb_meta('cau_hoi');
?>
<section class="questions">
	<div class="container">
		<h2 class="title"><?= $title_question;?></h2>
		<div class="questions__wrap">
			<?php
			$i = 1;
			foreach ( $questions as $question ) :
				$name    = $question['hoi'];
				$content = $question['tra_loi'];
				if ( $i === 1 ) {
					$open = 'open';
				} else {
					$open = '';
				}
				?>
				<details <?= esc_html( $open )?>>
					<summary>
						<?= esc_html( $name ); ?>
					</summary>
					<div class="panel">
						<?= wp_kses_post( wpautop( $content ) ); ?>
					</div>
				</details>
				<?php
				$i++;
			endforeach;
			?>
		</div>
	</div>
</section>