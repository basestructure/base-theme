/* BASE_230 | HOOK | 230_BASE | GUIDE - 2016-07-13 */
// Reference: https://codex.wordpress.org/Conditional_Tags

// BLOG PAGE

//* Apply widget area - hookname
add_action( 'genesis_before_header', 'base230_hookname' );
function base230_headerhookname() {
	if ( is_front_page() && is_home() ) {
		// default homepage
	} elseif ( is_front_page() ) {
		// static homepage
	} elseif ( is_home() ) {
		// blog page
	} else {
		// everything else
	}
}





//* Apply widget area - headerbefore
add_action( 'genesis_before_header', 'base230_headerbefore' );
	function base230_headerbefore() {
		if (is_front_page()) {
			genesis_widget_area( 'headerbefore', array(
				'before' => '<div class="headerbefore-home widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'headerbefore', array(
				'before' => '<div class="headerbefore widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}



// ---------------------------------------------------------
// SEPARATE HOME VS REGULAR
// ---------------------------------------------------------

//* Apply widget area - headerbefore
add_action( 'genesis_before_header', 'base230_headerbefore' );
	function base230_headerbefore() {
		if (is_front_page()) {
			genesis_widget_area( 'headerbefore', array(
				'before' => '<div class="headerbefore-home widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'headerbefore', array(
				'before' => '<div class="headerbefore widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}

//* Register widget area - headerbefore-home
genesis_register_sidebar( array(
	'id'            => 'headerbefore-home',
	'name'          => __( 'Header Before Home', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the header area', 'base-227' ),
) );

//* Register widget area - headerbefore
genesis_register_sidebar( array(
	'id'            => 'headerbefore',
	'name'          => __( 'Header Before', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the header area', 'base-227' ),
) );