/* BASE_230 | HOOK | 230_BASE | XWIDGET - 2016-09-24 */
// Add github link here



// MANUAL HTML (NO WIDGET)

//* Apply manual html code - xwidget
add_action( 'genesis_before', 'base230_xwidget' );
	function base230_xwidget() {
		?>
		<div class="xwidget">XWIDGET MANUAL HTML CODE</div>
		<?php
	}



// OVERALL WIDGET

//* Apply widget area - xwidget
add_action( 'genesis_before', 'base230_xwidget_overall' );
	function base230_xwidget_overall() {
		genesis_widget_area( 'xwidget', array(
			'before' => '<div class="xwidget widget-area"><div class="hookwrap">',
			'after' => '</div></div>',
		) );
	}

//* Register widget area - contentbefore
genesis_register_sidebar( array(
	'id'            => 'xwidget',
	'name'          => __( 'XWidget', 'base-230' ),
	'description'   => __( 'This is a widget area manually assigned', 'base-230' ),
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