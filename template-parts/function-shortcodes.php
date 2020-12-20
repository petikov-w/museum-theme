<?php
function add_user_email( $atts ) {

	$icon_email = get_template_directory_uri().'/assets/images/sprite.svg#email';
	$params = shortcode_atts(
	// в массиве указываем значения параметров по умолчанию
		array(
			'email' => get_field('email_address', 49),
		),
		$atts
	);

	$result = '<div class="email-a"><svg width="23" height="22" class="icon email-icon">
                    <use xlink:href="' . $icon_email . '"</use></svg>
                    <a href="mailto:' . $params[ 'email' ] . '">' . $params[ 'email' ] . '</a></div>';

	return $result;
}

add_shortcode( 'email', 'add_user_email' );