<?php
/**
 * theme support
 */
 add_theme_support( 'post-thumbnails' );

/**
 * init
 */
	if ( ! isset( $content_width ) ) :
		$content_width = 1200;
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

/**
 * サムネイルからサイズ削除
 **/
	add_filter( 'post_thumbnail_html', 'custom_attribute' );
	function custom_attribute( $html ){
	// width height を削除する
	$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
	return $html;
}

/**
 * サムネイルサイズ拡張
 **/
add_image_size( 'img320', 320, 400, true );
function cropTopLeft( $first, $orig_w, $orig_h, $dest_w, $dest_h, $crop ) {
	if ( null !== $output )
		return $output;

	if ( $crop ) {
		// crop the largest possible portion of the original image that we can size to $dest_w x $dest_h
		$aspect_ratio = $orig_w / $orig_h;
		$new_w = min($dest_w, $orig_w);
		$new_h = min($dest_h, $orig_h);

		if ( ! $new_w ) {
			$new_w = (int) round( $new_h * $aspect_ratio );
		}

		if ( ! $new_h ) {
			$new_h = (int) round( $new_w / $aspect_ratio );
		}

		$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

		$crop_w = round($new_w / $size_ratio);
		$crop_h = round($new_h / $size_ratio);

		if ( ! is_array( $crop ) || count( $crop ) !== 2 ) {
			$crop = array( 'center', 'center' );
		}

		list( $x, $y ) = $crop;

		if ( 'left' === $x ) {
			$s_x = 0;
		} elseif ( 'right' === $x ) {
			$s_x = $orig_w - $crop_w;
		} else {
			$s_x = 0;
		}

		if ( 'top' === $y ) {
			$s_y = 0;
		} elseif ( 'bottom' === $y ) {
			$s_y = $orig_h - $crop_h;
		} else {
			$s_y = 0;
		}
	} else {
		// don't crop, just resize using $dest_w x $dest_h as a maximum bounding box
		$crop_w = $orig_w;
		$crop_h = $orig_h;

		$s_x = 0;
		$s_y = 0;

		list( $new_w, $new_h ) = wp_constrain_dimensions( $orig_w, $orig_h, $dest_w, $dest_h );
	}

	// if the resulting image would be the same size or larger we don't want to resize it
	if ( $new_w >= $orig_w && $new_h >= $orig_h && $dest_w != $orig_w && $dest_h != $orig_h ) {
		return false;
	}

	// the return array matches the parameters to imagecopyresampled()
	// int dst_x, int dst_y, int src_x, int src_y, int dst_w, int dst_h, int src_w, int src_h
	return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'cropTopLeft', 10, 6 );

//====================================================================================
// クロスドメイン問題の解決 - for SAKURA Internet
//====================================================================================
function my_post_header( $headers ) {
	if ( !is_admin() ) {
		header( "Access-Control-Allow-Origin: 'https://fonts.googleapis.com', 'https://fonts.gstatic.com/', 'http://maps.google.com'" );
	}
}

add_action( 'send_headers', 'my_post_header');
