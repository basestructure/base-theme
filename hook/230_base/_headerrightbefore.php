/* BASE_230 | HOOK | 230_BASE | HEADERRIGHTBEFORE - 2016-09-24 */

//* Apply widget area - headerrightbefore
add_action( 'genesis_header_right', 'base230_headerrightbefore' );
	function base230_headerrightbefore() {
		if (is_front_page()) {
			genesis_widget_area( 'headerrightbefore', array(
				'before' => '<div class="headerrightbefore-home widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'headerrightbefore', array(
				'before' => '<div class="headerrightbefore widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}



// ---------------------------------------------------------
// SEPARATE HOME VS REGULAR
// ---------------------------------------------------------

//* Apply widget area - headerrightbefore
add_action( 'genesis_header_right', 'base230_headerrightbefore' );
	function base230_headerrightbefore() {
		if (is_front_page()) {
			genesis_widget_area( 'headerrightbefore', array(
				'before' => '<div class="headerrightbefore-home widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'headerrightbefore', array(
				'before' => '<div class="headerrightbefore widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}

//* Register widget area - headerrightbefore-home
genesis_register_sidebar( array(
	'id'            => 'headerrightbefore-home',
	'name'          => __( 'Header Before Home', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the header area', 'base-227' ),
) );

//* Register widget area - headerrightbefore
genesis_register_sidebar( array(
	'id'            => 'headerrightbefore',
	'name'          => __( 'Header Before', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the header area', 'base-227' ),
) );