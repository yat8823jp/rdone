<?php
//====================================================================================
//初期設定
//====================================================================================

	if ( ! isset( $content_width ) ) :
		$content_width = 1280;
	endif;

	$theme         = wp_get_theme();
	$theme_version = $theme->get( 'Version' );
	define( 'COMMON_PFIX', get_template_directory_uri() );

	function readScript() {
		wp_enqueue_style(  'slick', get_template_directory_uri() . '/js/slick-1.5.0/slick.css', array(), '1.5.0' );
		wp_enqueue_style(  'reset', get_template_directory_uri() . '/css/reset.css', array(), $theme_version );
		wp_enqueue_style(  'rd-style', get_stylesheet_uri(), array(), $theme_version );
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick-1.5.0/slick.js', array( 'jquery' ), "1.5.0", true );
		wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js', array( 'jquery' ), $theme_version, true );
		wp_enqueue_script( 'smoothScroll', get_template_directory_uri() . '/js/jquery.smoothScroll.js', array( 'jquery' ),'0.5.0' , true );
		wp_enqueue_script( 'slide', get_template_directory_uri() . '/js/slide.js', array( 'jquery' ), $theme_version, true );
		wp_enqueue_script( 'responsive', get_template_directory_uri() . '/js/responsive.js', array( 'jquery' ), $theme_version, true );
		wp_enqueue_script( 'toggle', get_template_directory_uri() . '/js/toggle.js', array( 'jquery' ), $theme_version, true );
	}
	add_action( 'wp_enqueue_scripts', 'readScript' );

//====================================================================================
// クロスドメイン問題の解決 - for SAKURA Internet
//====================================================================================
function my_post_header( $headers ) {
	if ( !is_admin() ) {
		header( "Access-Control-Allow-Origin: 'https://fonts.googleapis.com', 'https://fonts.gstatic.com/', 'http://maps.google.com'" );
	}
}

add_action( 'send_headers', 'my_post_header');
