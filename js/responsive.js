jQuery( function( $ ) {
	$( ".is-responsive" ).each( function() {
		var $core = $( this );
		var $value = $( this ).data( "sp-img" );
		var $src = $core.attr( "src" );
		$( window ).on( 'load resize', function() {
			if( $( window ).width() <= 768 ) {
				$core.attr( "src", $value );
			} else {
				$core.attr( "src", $src );
			}
		} );
	} );
} );
