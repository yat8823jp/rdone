jQuery( window ).ready(function( $ ){
   jQuery('.ft-menu a[href^="#"], a[href^="#sec2"]').click(function() {// # クリック処理
      var speed = 400; //スクロール速度ミリ秒
      var href = jQuery( this ).attr( "href" ); // アンカーの値取
      // 移動先を取得
      var target = jQuery( href == "#" || href == "" ? 'html' : href );
      var position = target.offset().top;// 移動先を数値で取得
      // スムーススクロール
      jQuery( 'body,html' ).animate( { scrollTop: position }, speed, 'swing' );
      return false;
   });

  var top = $( '.sec1' ).offset().top; //初期値を取得

  $( window ).scroll( function() {
    var value = $( this ).scrollTop(); //スクロールの値を取得
    $( '#sec1' ).css( 'top', top + value / 3 );
  });
});
