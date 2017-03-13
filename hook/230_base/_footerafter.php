/* BASE_230 | HOOK | 230_BASE | FOOTERAFTER - 2016-08-03 */

//* Apply widget area - footerafter
add_action( 'genesis_after_footer', 'base230_footerafter' );
	function base230_footerafter() {
		if (is_front_page()) {
			genesis_widget_area( 'footerafter', array(
				'before' => '<div class="footerafter-home widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'footerafter', array(
				'before' => '<div class="footerafter widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}



// ---------------------------------------------------------
// SEPARATE HOME VS REGULAR
// ---------------------------------------------------------

//* Apply widget area - footerafter
add_action( 'genesis_after_footer', 'base230_footerafter' );
	function base230_footerafter() {
		if (is_front_page()) {
			genesis_widget_area( 'footerafter', array(
				'before' => '<div class="footerafter-home widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'footerafter', array(
				'before' => '<div class="footerafter widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}

//* Register widget area - footerafter-home
genesis_register_sidebar( array(
	'id'            => 'footerafter-home',
	'name'          => __( 'Footer After Home', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the header area', 'base-230' ),
) );

//* Register widget area - footerafter
genesis_register_sidebar( array(
	'id'            => 'footerafter',
	'name'          => __( 'Footer After', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the header area', 'base-230' ),
) );