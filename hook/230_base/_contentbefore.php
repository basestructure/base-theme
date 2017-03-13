/* BASE_230 | HOOK | 230_BASE | CONTENTBEFORE - 2016-09-8 */
// <script src="https://gist.github.com/markcorpuz/93571eb92efcca78b74512157586c01e.js"></script>




// REGULAR ONLY

//* Apply widget area - contentbefore
add_action( 'genesis_before_content', 'base230_contentbefore' );
	function base230_contentbefore() {
		genesis_widget_area( 'contentbefore', array(
			'before' => '<div class="contentbefore widget-area"><div class="hookwrap">',
			'after' => '</div></div>',
		) );
	}

//* Register widget area - contentbefore
genesis_register_sidebar( array(
	'id'            => 'contentbefore-home',
	'name'          => __( 'Content Before', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the content area', 'base-230' ),
) );





// HOME + REGULAR

//* Apply widget area - contentbefore
add_action( 'genesis_before_content', 'base230_contentbefore' );
	function base230_contentbefore() {
		if (is_front_page()) {
			genesis_widget_area( 'contentbefore-home', array(
				'before' => '<div class="contentbefore widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		} else {
			genesis_widget_area( 'contentbefore', array(
				'before' => '<div class="contentbefore widget-area"><div class="hookwrap">',
				'after' => '</div></div>',
			) );
		}
	}

//* Register widget area - contentbefore
genesis_register_sidebar( array(
	'id'            => 'contentbefore-home',
	'name'          => __( 'Content Before Home', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the content area', 'base-230' ),
) );

//* Register widget area - contentbefore
genesis_register_sidebar( array(
	'id'            => 'contentbefore',
	'name'          => __( 'Content Before', 'base-230' ),
	'description'   => __( 'This is a widget area that can be placed before the content area', 'base-230' ),
) );