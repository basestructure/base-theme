/* BASE_230 | HOOK | 230_BASE | HEADERAFTER - 2016-08-19 */

//* Apply widget area - headerafter
add_action( 'genesis_after_header', 'base230_headerafter' );
	function base230_headerafter() {
		if (is_front_page()) {
			genesis_widget_area( 'headerafter', array(
				'before' => '<div class="headerafter widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'headerafter', array(
				'before' => '<div class="headerafter widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}

//* Register widget area - headerafter
genesis_register_sidebar( array(
	'id'            => 'headerafter',
	'name'          => __( 'Header After', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed after the header area', 'base-230' ),
) );