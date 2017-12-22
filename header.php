<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
	<meta name="description" content="<?php echo COMMON_PFIX; ?>/img/meta/ogp.jpg">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="article">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<meta property="og:image" content="<?php echo wp_upload_dir( "baseurl" ); ?>/2017/04/ogp.jpg">
	<?php if (is_home() || is_front_page()) :?>
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<?php else: ?>
	<meta property="og:title" content="<?php the_title(); ?>">
	<?php endif ;?>
	<?php if (is_home() || is_front_page()) :?>
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<?php else: ?>
	<meta property="og:url" content="<?php the_permalink() ?>">
	<?php endif ;?>
	<meta property="og:description" content="<?php bloginfo('description'); ?>">

	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/favicon.ico">
	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="48x48" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/favicon-48x48.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/favicon-160x160.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/favicon-196x196.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo COMMON_PFIX; ?>/img/ico/favicons/favicon-32x32.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#2d88ef">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-65107369-1', 'auto');
		ga('send', 'pageview');
	</script>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body id="pagetop" <?php body_class( 'index' ); ?>>
	<article class="wrap">
		<header class="sec1" id="sec1">
			<h1 class="logo"><img src="<?php echo COMMON_PFIX; ?>/img/rish-design-logo1.png" alt="Rish-Design" width="" height="" class="logo-img"></h1>
			<div class="top-arrow-bottom"><a href="#sec2"><img src="<?php echo COMMON_PFIX; ?>/img/top_arrow_bottom.png" alt="↓"></a></div>
		</header><!--/.sec1-->
