<section class="single-service">
	<div class="menu-service">
		<ul class="tabs menu" id="tab">
			<li class="tab-link current" data-tab="tab_about">
				<?php
				if ( get_locale() == 'vi' ) {
					echo 'Giới thiệu';
				} else {
					echo 'Introduction';
				}
				?>
			</li>
			
			<li class="tab-link " data-tab="tab_hau-truong">
				<?php
				if ( get_locale() == 'vi' ) {
					echo 'Quy trình truyền thống';
				} else {
					echo 'Traditional process';
				}
				?>
			</li>

			<li class="tab-link " data-tab="tab_ly-do">
				<?php
				if ( get_locale() == 'vi' ) {
					echo 'Tại sao chọn VSM';
				} else {
					echo 'Why choose VSM';
				}
				?>
			</li>
			<li class="tab-link " data-tab="tab_quy-trinh">
				<?php
				if ( get_locale() == 'vi' ) {
					echo 'Quy trình sản xuất';
				} else {
					echo 'Production process';
				}
				?>
			</li>
			<li class="tab-link " data-tab="tab_cam-ket">
				<?php
				if ( get_locale() == 'vi' ) {
					echo 'Cam kết dịch vụ';
				} else {
					echo 'Service Commitment';
				}
				?>
			</li>
		</ul>
	</div>
	<div id="tab-content">
		<div id="tab_about" class="tab-content current">
			<?php get_template_part('template-parts/single-service/tong-the');?>
		</div>
		<div id="tab_hau-truong" class="tab-content">
			<?php get_template_part('template-parts/single-service/truyen-thong');?>
		</div>
		<div id="tab_ly-do" class="tab-content">
			<?php get_template_part('template-parts/single-service/why-chose');?>
		</div>
		<div id="tab_quy-trinh" class="tab-content">
			<?php get_template_part('template-parts/single-service/quy-trinh');?>
		</div>
		<div id="tab_cam-ket" class="tab-content">
			<?php get_template_part('template-parts/single-service/cam-ket');?>
		</div>
		
	</div>
</section>