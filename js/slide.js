jQuery( document ).ready(function( $ ){
	$( '.portfolio-sub' ).slick( {
		slidesToShow: 3, //スライドが見える数
		slidesToScroll: 1, //スライドがスクロールする数
		infinite: true, //無限スクロール
		draggable: false, //マウスドラッグでのスクロール
		arrows: true,
		dots: false,
		prevArrow: $( '.slider .slick-prev' ),
		nextArrow: $( '.slider .slick-next' ),
		slide: 'li',
		responsive: [
			{
				breakpoint: 481,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					// centerMode: true,
					arrows: true,
					prevArrow: $( '.slider .slick-prev' ),
					nextArrow: $( '.slider .slick-next' ),
					slide: 'li',
					autoplay: true
				}
			},
			{
				breakpoint: 321,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					// centerMode: true,
					arrows: true,
					prevArrow: $( '.slider .slick-prev' ),
					nextArrow: $( '.slider .slick-next' ),
					slide: 'li',
					autoplay: true
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	} );
} );
