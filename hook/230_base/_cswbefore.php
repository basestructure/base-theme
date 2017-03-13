/* BASE_230 | HOOK | 230_BASE | CSWBEFORE - 2016-08-17 */

//* Apply widget area - cswbefore
add_action( 'genesis_before_content_sidebar_wrap', 'base227_cswbefore' );
	function base227_cswbefore() {
		if (is_front_page()) {
			genesis_widget_area( 'cswbefore', array(
				'before' => '<div class="cswbefore widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'cswbefore', array(
				'before' => '<div class="cswbefore widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}

//* Register widget area - cswbefore
genesis_register_sidebar( array(
	'id'            => 'cswbefore',
	'name'          => __( 'CSW Before', 'base-227' ),
	'description'   => __( 'This is a widget area that can be placed before content sidebar wrap area', 'base-227' ),
) );