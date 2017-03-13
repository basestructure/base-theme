/* BASE_230 | HOOK | 230_BASE | CSWAFTER - 2016-08-17 */

//* Apply widget area - cswafter
add_action( 'genesis_after_content_sidebar_wrap', 'base227_cswafter' );
	function base227_cswafter() {
		if (is_front_page()) {
			genesis_widget_area( 'cswafter', array(
				'before' => '<div class="cswafter widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'cswafter', array(
				'before' => '<div class="cswafter widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}

//* Register widget area - cswafter
genesis_register_sidebar( array(
	'id'            => 'cswafter',
	'name'          => __( 'CSW After', 'base-227' ),
	'description'   => __( 'This is a widget area that can be placed after content sidebar wrap area', 'base-227' ),
) );