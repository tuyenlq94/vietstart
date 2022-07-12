<?php
// Change Comment form
add_filter( 'comment_form_defaults', 'vietstart_comment_form_args' );
function vietstart_comment_form_args( $defaults ) {
	global $user_identity, $id;
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? ' aria-required="true"' : '' );
	$author    = '<p class="comment-form-author">' .
			'<input id="author" name="author" required="true" type="text" class="author" placeholder="Full Name *" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" tabindex="1"' . $aria_req . '/>' .
			'</p>';
	$email     = '<p class="comment-form-email">' .
			'<input id="email" name="email" required="true" type="text" class="email" placeholder="Email Address*" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" tabindex="2"' . $aria_req . ' />' .
			'</p>';
	$url       = '<p class="comment-form-url">' .
		'<input id="url" name="url" type="text" required="true" class="url" placeholder="Website URL" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" tabindex="3" />' .
		'</p>';

	$comment_field = '<p class="comment-form-comment">' .
					'<textarea id="comment" name="comment" required="true" placeholder="Write Your Comment Here ..." cols="45" rows="8" class="form" tabindex="4" required="true"></textarea>' .
					'</p>';
	$args          = array(
		'fields'               => array(
			'author' => $author,
			'email'  => $email,
			'url'    => $url,
		),
		'comment_field'        => $comment_field,
		'title_reply'          => __( 'Leave a Reply', 'vietstart' ),
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
	);
	$args          = wp_parse_args( $args, $defaults );
	return apply_filters( 'vietstart_comment_form_args', $args, $user_identity, $id, $commenter, $req, $aria_req );
}

// Move Text Field to the Bottom of the Form
function vietstart_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
};
add_filter( 'comment_form_fields', 'vietstart_move_comment_field_to_bottom' );

function vietstart_tag_cloud_args( $args ) {
	$args['largest']  = 14; // Largest tag.
	$args['smallest'] = 14; // Smallest tag.
	$args['unit']     = 'px'; // Tag font unit.

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'vietstart_tag_cloud_args' );

function vietstart_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}

	return $title;
}
add_filter( 'get_the_archive_title', 'vietstart_archive_title' );

add_filter( 'nav_menu_link_attributes', 'vietstart_add_menu_link_attributes', 10, 4 );
add_filter( 'walker_nav_menu_start_el', 'vietstart_add_dropdown_icons', 10, 4 );

/**
 * Adjustments to menu attributes to support WCAG 2.0 recommendations for flyout and dropdown menus.
 * @link https://www.w3.org/WAI/tutorials/menus/flyout/
 */
function vietstart_add_menu_link_attributes( $atts, $item, $args, $depth ) {
	$item_has_children = in_array( 'menu-item-has-children', $item->classes );
	if ( $item_has_children ) {
		$atts['aria-haspopup'] = 'true';
		$atts['aria-expanded'] = 'false';
	}
	return $atts;
}

function vietstart_add_dropdown_icons( $output, $item, $depth, $args ) {
	if ( isset( $args->theme_location ) && 'menu-1' === $args->theme_location && in_array( 'menu-item-has-children', $item->classes, true ) ) {
		// Translators: %s - Menu item title.
		$output = '<div class="menu-text">' . $output . '<button class="sub-menu-toggle" aria-expanded="false"><span class="screen-reader-text">' . esc_html( sprintf( __( 'Show submenu for %s', 'vietstart' ), $item->title ) ) . '</span>' . Vietstart_Icons::render( 'chevron-down', false ) . '</button></div>';
	}
	return $output;
}

