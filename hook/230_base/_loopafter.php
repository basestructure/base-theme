/* BASE_230 | HOOK | 230_BASE | LOOPAFTER - 2016-08-17 */

//* Apply widget area - loopafter
add_action( 'genesis_after_loop', 'base230_loopafter' );
	function base230_loopafter() {
		if (is_home()) {
			genesis_widget_area( 'loopafter', array(
				'before' => '<div class="loopafter widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			// no entry
		}
	}

//* Register widget area - loopafter
genesis_register_sidebar( array(
	'id'            => 'loopafter',
	'name'          => __( 'Loop After', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed after the loop', 'base-230' ),
) );