/* BASE_230 | HOOK | 230_BASE | SBRWGTAREABEFORE - 2016-08-17 */

//* Apply widget area - sbrwgtareabefore
add_action( 'genesis_before_sidebar_widget_area', 'base230_sbrwgtareabefore' );
	function base230_sbrwgtareabefore() {
		if (is_front_page()) {
			genesis_widget_area( 'sbrwgtareabefore-home', array(
				'before' => '<div class="sbrwgtareabefore widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'sbrwgtareabefore', array(
				'before' => '<div class="sbrwgtareabefore widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}

//* Register widget area - sbrwgtareabefore
genesis_register_sidebar( array(
	'id'            => 'sbrwgtareabefore',
	'name'          => __( 'Sidebar Widget Area Before', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the sidebar widget area', 'base-230' ),
) );

//* Register widget area - sbrwgtareabefore-home
genesis_register_sidebar( array(
	'id'            => 'sbrwgtareabefore-home',
	'name'          => __( 'Sidebar Widget Area Before Home', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the sidebar widget area', 'base-227' ),
) );