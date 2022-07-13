<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Vietstart
 */

if ( ! function_exists( 'vietstart_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function vietstart_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'vietstart' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'vietstart_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function vietstart_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'vietstart' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'vietstart_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function vietstart_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'vietstart' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'vietstart' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'vietstart' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'vietstart' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'vietstart' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'vietstart' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'vietstart_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function vietstart_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
function vietstart_products() {
	?>
	<div class="products__item">
		<div class="entry-thumbnail">
			<a href="<?php the_permalink();?>"><?php the_post_thumbnail()?></a>
		</div>
		<div class="entry-title">
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
		</div>
	</div>
	<?php
}
function vietstart_list_product($id) {
	$args          = array(
		'post_type' => 'san-pham',
		'posts_per_page' => 9,
		'order'	=> 'DESC',
		'orderby'=>'ID',
		'tax_query' => array( 
			'relation' => 'AND',
			array(
				'taxonomy' => 'loai-san-pham',  
				'field' => 'id',   
				'terms' => array( $id ),
			  ),
		),
	);
	$the_query     = new WP_Query( $args );
	if( $the_query->have_posts()):
		while( $the_query->have_posts()):
			$the_query->the_post();
			vietstart_products();
		endwhile;
	endif;
	wp_reset_postdata();
}

function vietstart_blog_post() {
	?>
	<div class="blog__item">
		<div class="entry_thumbnail">
			<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
		</div>
		<div class="entry_title">
			<p class="date"><?php echo get_the_date('d F Y');?></p>
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
		</div>
	</div>
	<?php
}
function vietstart_list_post() {
	?>
	<div class="archive-post__item">
		<div class="entry_thumbnail">
			<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
		</div>
		<div class="entry_title">
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<div class="entry_excerpt"><?php the_excerpt();?></div>
			<p class="date"><?php echo get_the_date('d F Y');?></p>
		</div>
	</div>
	<?php
}

function vietstart_blog_cat($id, $name) {
	$args    = array(
		'post_type' => 'post',
		'cat' => $id,
		'posts_per_page' => 6,
	);
	$the_query     = new WP_Query( $args );
	?>
	<div class="blog-cat">
		<div class="blog-cat__top">
			<h2><?= $name;?></h2>
			<a href="<?= get_category_link($id);?>">Xem thêm</a>
		</div>
		<div class="blog-cat__list">
			<?php
			if($the_query->have_posts()){
				while($the_query->have_posts()) {
					$the_query->the_post();
					vietstart_blog_post();
				}
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
	<?php
}