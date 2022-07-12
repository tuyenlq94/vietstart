<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vietstart
 */
$image                = rwmb_meta( 'image_footer', [ 'object_type' => 'setting' ], 'footer' );
$image1               = rwmb_meta( 'image', [ 'object_type' => 'setting' ], 'footer' );
$khu_vuc              = rwmb_meta( 'khu_vuc', [ 'object_type' => 'setting' ], 'footer' );
$dich_vu              = rwmb_meta( 'dich_vu', [ 'object_type' => 'setting' ], 'footer' );
$gioi_thieu           = rwmb_meta( 'gioi_thieu', [ 'object_type' => 'setting' ], 'footer' );
$title_follow         = rwmb_meta( 'title_follow', [ 'object_type' => 'setting' ], 'footer' );
$follow_us            = rwmb_meta( 'follow_us', [ 'object_type' => 'setting' ], 'footer' );
$title_dieu_khoan     = rwmb_meta( 'title_dieu_khoan', [ 'object_type' => 'setting' ], 'footer' );
$danh_sach_dieu_khoan = rwmb_meta( 'danh_sach_dieu_khoan', [ 'object_type' => 'setting' ], 'footer' );
$zalo                 = rwmb_meta( 'zalo', [ 'object_type' => 'setting' ], 'footer' );
// var_dump( $image );
?>
	<img src="<?= esc_attr( $image1['full_url'] );?>" alt="">
	<?php get_template_part( 'template-parts/footer/tuvan' ); ?>
	<img src="<?= esc_attr( $image['full_url'] );?>" alt="">
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 footer-collum">
					<div class="footer-collum__content">
						<?php
						foreach ( $khu_vuc as $value ) {
							$title   = $value['title'];
							$content = $value['mo_ta'];
							?>
							<h2 class="title"><?= $title;?></h2>
							<div class="entry-content">
								<?= wp_kses_post( wpautop( $content ) );?>
							</div>
							<?php
						}
						?>
					</div>
				</div>
				<div class="col-lg-3 footer-collum">
					<div class="footer-collum__content">
						<?php
						foreach ( $dich_vu as $value ) {
							$title   = $value['title_dich_vu'];
							$content = $value['list_dich_vu'];
							?>
							<h2 class="title"><?= $title;?></h2>
							<div class="entry-content">
								<?= wp_kses_post( wpautop( $content ) );?>
							</div>
							<?php
						}
						?>
					</div>
				</div>
				<div class="col-lg-3 footer-collum">
					<div class="footer-collum__content">
						<?php
						foreach ( $gioi_thieu as $value ) {
							$title   = $value['title_gioi_thieu'];
							$content = $value['list_gioi_thieu'];
							?>
							<h2 class="title"><?= $title;?></h2>
							<div class="entry-content">
								<?= wp_kses_post( wpautop( $content ) );?>
							</div>
							<?php
						}
						?>
					</div>
				</div>
				<div class="col-lg-3 footer-collum">
					<div class="footer-collum__content">
						<h2 class="title"><?= $title_follow;?></h2>
						<div class="entry-content">
							<?= wp_kses_post( wpautop( $follow_us ) );?>
						</div>
						<h2 class="title"><?= $title_dieu_khoan;?></h2>
						<div class="entry-content">
							<?= wp_kses_post( wpautop( $danh_sach_dieu_khoan ) );?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="sp-footer">
		<div class="container">
			<div class="sp-copyright">
				<p>© 2020 VIETSTARMAX. All Rights Reserved</p>
			</div>
		</div>
	</div>
	<a href="https://zalo.me/<?= $zalo;?>" class="zalo-btn">
		<img src="<?= get_template_directory_uri();?>/images/zalo.png" alt="">
	</a>
	<div class="fixed-bottom">
		<?php
		$phones = rwmb_meta( 'phone', [ 'object_type' => 'setting' ], 'footer' );
		foreach ( $phones as $phone ) {
			$sdt  = $phone['sdt'];
			$text = $phone['text_phone'];
			?>
			<div class="fixedbtm">
				<a href="tel:<?= $sdt;?>"><?php Vietstart_Icons::render( 'phone' ); ?><?= $text?></a>
			</div>
			<?php
		}
		?>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
