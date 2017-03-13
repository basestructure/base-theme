/* BASE_230 | HOOK | 230_BASE | ENTRYFOOTER - 2016-08-17 */

//* Apply widget area - entryfooter
add_action( 'genesis_entry_footer', 'base227_entryfooter' );
	function base227_entryfooter() {
		if (is_single()) {
			// empty
		} else {
			genesis_widget_area( 'entryfooter', array(
				'before' => '<div class="entryfooter widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}

//* Register widget area - entryfooter
genesis_register_sidebar( array(
	'id'            => 'entryfooter',
	'name'          => __( 'Entry Footer', 'base-227' ),
	'description'   => __( 'This is a widget area that can be placed after the post entry area', 'base-227' ),
) );