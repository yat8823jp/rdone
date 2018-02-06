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
			<!-- <h1 class="logo"><img src="<?php echo COMMON_PFIX; ?>/img/rish-design-logo1.png" alt="Rish-Design" width="" height="" class="logo-img is-responsive"></h1> -->
			<h1 class="logo">
				<?xml version="1.0" encoding="utf-8"?>
				<!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
				<svg class="p-svg logo-img is-responsive" version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
					<path class="p-svg__path" d="M268,243c-27,45-50.7,53.7-62,39c-6.9-8.9-13.7-13.1-17.9-14.9c-1.2-0.6-2.4-1.2-3.5-1.8c1.7,0,3.6,0,5.7,0.2c24,1.1,72.5-6.1,48-105.6c-0.4-3-0.7-5.7-1-8.3c2.4-5.3,4.6-11.2,4.9-13.8c0.3-2.6-4.5-7-5.8,1.3c-0.8,5-0.2,5.3,0.3,12.5c-1,2.4-2,4.7-2.8,6.5C221,182.7,143.2,322.1,41,284.4c-6,37.3,109.3-7.3,62,18.9c0.3,1,2.8,2.3,12.4-3.4c26.8-15.9,87.9-71.4,119.1-142.5c0.2-0.1,1.5-2.9,2.2-4.6c0.2,3,0.4,7,0.5,12.6c-0.5,23.9-6.3,81.8-50.3,96.9c-1.8,0.6-3.6,1-5.2,1.4c-5.3-2.6-10.4-4.4-15.1-2c-2.4,1.2-6,4,2.4,4.5c3,0.2,7.5-0.4,14.4-1c0.2,0.1,0.4,0.3,0.6,0.4c-0.1,0-0.2,0-0.2,0c0.2,0.1,0.4,0.2,0.6,0.3c0.9,0.6,1.9,1.3,2.8,2.1c7.5,7.6,7.3,25.3,28,37c13.3,7.5,34,9,45.2-5.2C220,308,269.3,248.2,268,243z M239.8,135.8c2.4,0.6,0.1,7.6-2.6,14.3C236.5,141.1,237.3,135.2,239.8,135.8z M165.3,264c2-3.1,8.7-3.6,15.6-0.1C171.1,266.1,164,266,165.3,264z"/>
					<g>
						<path class="p-svg__path"  d="M284.8,279.4c-0.7,0.4-1.9,1.2-3.6,2.4c-1.7,1.2-3.3,2.4-4.8,3.7c-1.5,1.3-3,2.5-4.4,3.7c-1.4,1.2-3,2.6-4.8,4.3c-1.1,0.8-1.8,1.1-2.1,0.8c-0.3-0.3-0.3-0.6,0-1c0.3-0.4,0.6-0.9,1-1.5c0.4-0.4,1.3-1.2,2.5-2.2c1.3-1,2.7-2.2,4.3-3.6c1.6-1.3,3.3-2.7,4.9-4c1.7-1.3,3.1-2.4,4.4-3.3c2.8-2,5-3.2,6.7-3.8c1.7-0.6,3.5-0.8,5.5-0.8c2.2-0.1,3.5,0,3.9,0.5c0.3,0.5-0.2,1.4-1.6,2.8c-2,2.1-3.8,4.2-5.5,6.4c-1.7,2.2-3.6,4.5-5.7,7c-1.8,2.2-3.4,4.2-4.6,6c-1.3,1.8-2.2,3.2-2.9,4.3c-1.3,2.4-1.5,3.9-0.6,4.6c0.6,0.7,1.3,0.9,2.2,0.5c0.9-0.3,1.9-0.7,2.8-1.2c1.1-0.6,2.6-1.4,4.3-2.6c1.7-1.2,3.4-2.5,4.9-3.9c2.2-1.8,4.2-3.4,5.9-4.8c1.7-1.4,3.1-2.7,4.2-3.8c0.6-0.3,1.1-0.6,1.7-1.1c0.6-0.4,1-0.5,1.3-0.2c0.3,0.3,0.1,0.7-0.4,1.4c-0.6,0.6-1,1.1-1.3,1.4c-1.3,1.3-3.2,3-5.8,5.2c-2.6,2.2-4.9,4.1-6.8,5.7c-2.1,1.7-4.8,3.5-8.1,5.6c-3.3,2-6.7,3-10.2,3c-2.2,0-3.9-0.5-4.9-1.6c-1-1-1.5-2.3-1.4-3.9c0-1.4,0.3-2.8,0.9-4.1c0.6-1.3,1.4-2.6,2.2-3.9c1.1-1.7,2.4-3.4,3.8-5.1c1.4-1.7,2.9-3.5,4.4-5.1c1.5-1.7,3-3.2,4.3-4.6c1.3-1.4,2.4-2.4,3.3-3.1V279.4z M314.2,244.3c1.4,0,2.3,0.5,2.7,1.6c0.4,1,0,2.3-1.3,3.9c-1.3,1.7-2.9,3-5,4.1c-2.1,1-3.7,1.6-4.8,1.6c-0.6-0.7-0.9-1.7-0.9-3c-0.1-1.3,0.2-2.7,0.7-4.1c0.7-1.5,1.8-2.6,3.3-3.2c1.5-0.6,3.2-0.8,5.1-0.8H314.2z"/>
						<path class="p-svg__path"  d="M326.6,302.1c1.3-0.6,2.7-1.3,4.3-2.1c1.6-0.8,3.3-1.8,4.9-2.9c2.9-1.8,5.6-3.7,8.1-5.7c2.4-2,4.4-3.5,5.8-4.6c0.4-0.4,0.9-0.8,1.5-1.2c0.6-0.3,1-0.4,1.3-0.1c0.3,0.3,0.1,0.7-0.4,1.4c-0.6,0.6-1,1.1-1.3,1.4c-1.1,1-2.7,2.3-4.7,4.1c-2,1.8-4.2,3.4-6.6,4.9c-2.4,1.5-4.7,2.9-6.9,4.1c-2.2,1.2-4.3,2.2-6.3,3c-2,0.8-4.6,1.7-7.9,2.5c-3.3,0.8-6.5,1.3-9.8,1.3c-2.8,0-5.1-0.4-6.8-1.2c-1.7-0.8-3.1-1.7-4-2.9c-0.9-1.2-1.5-2.6-1.8-4.1c-0.3-1.5-0.3-3,0-4.4c0.4-2.9,1.8-5.5,4-7.8c2.2-2.2,4.6-3.2,7.1-2.9c1.5,0,2.6,0.5,3.2,1.5c0.6,1,0.7,2,0.4,2.9c-0.4,1.8-2,3.6-4.6,5.2c-0.8,0.6-1.8,1.4-2.9,2.4c-1.1,1.1-1.7,2.3-1.9,3.9c-0.1,1.7,0.4,3,1.5,3.9c1.1,0.9,2.7,1.4,4.6,1.4c2.1,0,4.4-0.9,6.8-2.6c2.4-1.7,4.9-4.7,7.2-8.7c1-1.5,1.9-3.4,2.8-5.6c0.9-2.2,1.8-4.3,2.6-6.4c0.8-2.1,1.6-4,2.4-5.8c0.8-1.7,1.4-3,2-3.7v-0.2c-1.1,1.1-2.6,2.4-4.5,3.8c-1.9,1.4-3.7,2.8-5.6,4.2c-1.4,1.1-2.9,2.2-4.5,3.1c-1.6,1-2.8,1.6-3.5,1.9c-1,0.6-1.7,0.7-2.1,0.4c-0.1-0.4,0.2-1,1-1.9c1.1-0.7,2.4-1.6,4-2.6c1.5-1.1,3.2-2.1,4.8-3.3c2-1.4,3.9-2.9,5.9-4.5c2-1.6,4.1-3.5,6.5-5.6c0.3-0.4,0.7-1,1.4-1.8c0.6-0.8,1.3-1.4,2-1.8c1.1-1,2.2-1.6,3.4-1.9c1.1-0.3,2-0.4,2.7-0.4c2.4,0,3.2,0.5,2.3,1.6c-0.8,1-2,2-3.4,2.8c-1,0.7-1.9,1.3-2.8,1.7c-0.9,0.4-1.6,0.9-2.2,1.5c-0.8,0.8-1.3,1.7-1.4,2.6c-0.1,0.9-0.1,1.9-0.1,3c0.1,2.9,0.2,5.8,0.1,8.6c-0.1,2.8-0.7,5.7-2,8.6c-0.7,1.5-1.7,3.2-2.9,4.8c-1.3,1.7-2.5,2.9-3.8,3.8V302.1z"/>
					</g>
					<g>
						<path class="p-svg__path"  d="M419.9,240.9c-11.6,8.4-41.4,29-42.6,29.8c-0.8,1-4.7,5.9-6.1,7.7c-1.4,1.8-2.9,3.8-4.4,6c-1.5,2.2-3.1,4.4-4.6,6.7c-1.5,2.2-2.9,4.2-4.2,6l0.6,0.2c2.5-2.1,5.2-4.4,8.2-6.8c2.9-2.4,6.2-5.1,9.9-7.9c3.6-2.8,7.6-5.4,11.8-7.8c4.2-2.4,7.9-3.6,11.1-3.6c2.2,0,4,0.5,5.1,1.5c1.2,1,1.6,2.4,1.4,4.2c-0.3,2-1.3,4.1-3.1,6.3c-1.8,2.2-3.6,4.4-5.2,6.5c-3.5,4.2-5.8,7.2-6.9,9c-1.5,2.4-1.8,3.9-0.8,4.6c0.6,0.4,1.3,0.5,2.3,0.3c1-0.2,1.9-0.5,2.7-0.9c1.3-0.6,2.7-1.4,4.4-2.5c1.7-1.1,3.6-2.4,5.7-4c2.4-1.8,4.3-3.4,5.9-4.8c1.5-1.4,2.9-2.7,4.2-3.8c0.4-0.3,0.9-0.6,1.5-1c0.6-0.4,1-0.5,1.3-0.2c0.3,0.3,0.1,0.7-0.4,1.4c-0.6,0.6-1,1.1-1.3,1.4c-1.3,1.3-3,2.9-5.2,4.9c-2.2,2-4.8,4-7.6,6c-2.2,1.7-5,3.5-8.3,5.4c-3.3,1.9-6.8,2.9-10.4,2.9c-2.1,0-3.7-0.5-4.9-1.4c-1.2-0.9-1.6-2.1-1.4-3.7c0.3-2.4,1.4-4.9,3.3-7.5c1.9-2.6,3.7-5,5.6-7.2c1.5-2,3-3.8,4.5-5.5c1.5-1.7,2.9-3.3,4.3-4.8c0.4-0.6,0.7-1.1,0.8-1.7c0.1-0.6-0.1-1-0.6-1.3c-0.6-0.3-1.4-0.2-2.6,0.2c-1.2,0.4-2.1,0.8-2.8,1c-2,1-4.3,2.3-7.1,4.1c-2.8,1.8-5.9,4-9.2,6.6c-2.2,1.8-4.3,3.5-6.2,5c-1.9,1.5-3.7,3-5.6,4.5c-1.8,1.5-3.6,3-5.5,4.5c-1.8,1.5-3.9,3.2-6.3,5c-1.7,1.3-3.5,1.9-5.5,1.9c-1.5,0-2.6-0.2-3.2-0.5c-0.6-0.4-0.4-1.3,0.4-2.9c2.2-4.2,5.1-8.9,8.6-14.1c0.8-1.1,1.8-2.4,2.8-3.9c1-1.5,2.2-3,3.5-4.5v-0.2c-1.5,1.4-3,2.8-4.5,4.1c-1.5,1.3-2.6,2.4-3.5,3.3c-1.1,1-1.9,1.2-2.3,0.6c-0.3-0.3,0.2-1,1.5-2.3c2-1.7,4.1-3.5,6.3-5.5c2.2-2,4.5-4,6.9-5.9c1-1.3,12.3-20.1,62.7-72.3c30.7-31.8,36.5-18.3,36.8-15.9C464.7,210.3,431.8,232.3,419.9,240.9z M451.9,204.7c4.1-6.6,6.4-13.4,1.8-14.8c-6.8-2-18.3,11.8-26.6,20.3c-14.2,14.6-35.4,40-47.2,55.6C412.4,244.3,444,217.5,451.9,204.7z"/>
					</g>
					<g>
						<path class="p-svg__path2"  d="M178.3,358.6c0,0.9-0.7,1.3-2.2,1.3c-1.7,0-3-0.7-3.9-2.1c-0.4-0.6-0.7-1.2-0.8-1.7c-0.1-0.6-0.3-2-0.5-4.2c-0.1-1.4-0.6-2.3-1.3-2.9c-0.7-0.6-2-0.9-3.6-0.9v10.1c0,0.4,0.3,0.7,1,0.8c0.2,0,0.7,0,1.5,0.1c0.3,0,0.4,0.1,0.4,0.3c0,0.2-0.2,0.3-0.5,0.3h-0.4c-0.2,0-1.1,0-2.8,0c-0.3,0-0.9,0-1.6,0c-0.7,0-1.2,0-1.5,0h-1.2c-0.5,0-0.7-0.1-0.7-0.3c0-0.1,0.3-0.2,0.9-0.3c1,0,1.5-0.1,1.6-0.4c0.1-0.1,0.1-0.5,0.1-1.2v-17.7c0-0.9-0.1-1.4-0.3-1.5s-0.7-0.3-1.6-0.3c-0.5,0-0.8-0.1-0.8-0.3c0-0.2,0.2-0.3,0.5-0.3c0.1,0,0.2,0,0.3,0l4.3,0.1c0.4,0,1,0,1.8,0c0.9-0.1,1.5-0.1,1.8-0.1c2,0,3.6,0.4,4.7,1.3c1.2,0.9,1.7,2.1,1.7,3.6c0,1.5-0.6,2.7-1.8,3.7c-1.2,1-2.8,1.5-4.9,1.7c-0.2,0-0.3,0.1-0.3,0.1c0,0.1,0.1,0.1,0.3,0.1c2.2,0.4,3.8,1.2,4.6,2.4c0.8,1.2,1.4,3.3,1.7,6.4c0.2,1.8,0.8,2.6,1.8,2.6c0.3,0,0.5-0.1,0.5-0.2c0,0,0,0,0-0.1c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.4,0.2-0.7,0.7-0.7C178.1,357.8,178.3,358,178.3,358.6z M171.7,342.5c0-3.1-1.3-4.6-4-4.6c-0.7,0-1.2,0.1-1.4,0.3c-0.3,0.2-0.4,0.5-0.4,1v8.1c2,0,3.5-0.4,4.4-1.1S171.7,344.3,171.7,342.5z"/>
						<path class="p-svg__path2"  d="M187.6,359.3c0,0.1-0.1,0.2-0.3,0.2H187h-0.7h-0.8c-0.2,0-0.4,0-0.5,0c-0.2,0-0.3,0-0.4,0c-0.2,0-0.6,0-1.2,0c-0.6,0-1,0-1.3,0H182c-0.4,0-0.5-0.1-0.5-0.2c0-0.1,0.2-0.2,0.7-0.2c0.6,0,1-0.1,1-0.2c0-0.1,0-0.6,0-1.4v-10.4c0-0.8,0-1.3-0.1-1.5c0-0.1-0.2-0.2-0.5-0.2H182h-0.3c-0.2,0-0.3-0.1-0.3-0.2s0.1-0.2,0.4-0.2c0,0,0,0,0.2,0c0.1,0,0.4,0,0.7,0h2.3c0.1,0,0.3,0,0.6,0s0.5,0,0.7,0h0.8c0.3,0,0.5,0.1,0.5,0.3c0,0.1-0.4,0.2-1.1,0.2c-0.3,0-0.5,0-0.5,0.1c-0.1,0.1-0.1,0.4-0.1,0.9v12.1c0,0.2,0.1,0.4,0.2,0.4c0.2,0.1,0.5,0.1,1.1,0.2C187.5,359.1,187.6,359.2,187.6,359.3z"/>
						<path class="p-svg__path2"  d="M202.4,355.4c0,1.2-0.5,2.2-1.5,3.1c-1,0.8-2.3,1.3-3.7,1.3c-1.1,0-2.2-0.3-3.4-1c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2,0.1-0.2,0.3c0,0.2-0.1,0.4-0.1,0.5c0,0.2-0.1,0.2-0.3,0.2c-0.2,0-0.3-0.1-0.3-0.3c0,0,0-0.4,0.1-1c0-0.6,0.1-1.1,0.1-1.5c0-0.2,0-0.5,0-0.8c0-0.4,0-0.6,0-0.8c0-0.4,0.1-0.6,0.3-0.6c0.2,0,0.4,0.3,0.5,1c0.4,2.3,1.7,3.5,3.8,3.5c1.8,0,2.7-0.9,2.7-2.7c0-0.8-0.2-1.4-0.6-1.9c-0.4-0.5-1.3-1-2.5-1.7c-1.6-0.8-2.7-1.4-3.1-1.9c-0.6-0.6-0.9-1.4-0.9-2.3c0-1.2,0.4-2.1,1.3-2.9c0.9-0.8,1.9-1.1,3.2-1.1c0.8,0,1.7,0.2,2.6,0.7c0.1,0.1,0.2,0.1,0.3,0.1c0.1,0,0.2-0.2,0.3-0.5c0-0.3,0.2-0.5,0.4-0.5c0.2,0,0.3,0.1,0.3,0.3c0,0,0,0.1,0,0.3c0,0.3-0.1,0.8-0.1,1.3c0,0.3,0,0.9,0.1,1.7c0,0.1,0,0.2,0,0.3c0,0.3-0.1,0.4-0.3,0.4c-0.2,0-0.3-0.2-0.4-0.6c-0.2-0.9-0.6-1.7-1.2-2.2c-0.6-0.6-1.3-0.8-2.1-0.8c-1.5,0-2.3,0.8-2.3,2.5c0,0.7,0.2,1.3,0.6,1.8c0.2,0.3,0.4,0.5,0.7,0.6c0.3,0.1,1,0.5,2.2,1.1c1.4,0.7,2.4,1.3,2.9,2C202.2,353.8,202.4,354.6,202.4,355.4z"/>
						<path class="p-svg__path2"  d="M221.4,359.3c0,0.1-0.3,0.2-1,0.2c0,0-0.1,0-0.3,0c-0.2,0-0.4,0-0.5,0h-2.4c-0.4,0-0.6,0-0.7,0h-0.5c-0.5,0-0.7,0-0.7-0.2c0-0.1,0.2-0.2,0.5-0.2c0.7,0,1.1-0.1,1.1-0.3c0-0.1,0.1-0.5,0.1-1.1v-5.9h-6v6.6c0,0.2,0.1,0.4,0.3,0.4c0.1,0.1,0.5,0.1,1.1,0.1c0.2,0,0.3,0.1,0.3,0.2s-0.2,0.2-0.6,0.2h-0.5c-0.3,0-0.7,0-1.3,0H207c-0.3,0-0.5-0.1-0.5-0.2s0.3-0.2,0.9-0.3c0.5,0,0.7-0.1,0.8-0.4v-12c0-0.6,0-0.9,0-1c0-0.2-0.2-0.3-0.6-0.3c-0.7,0-1.1-0.1-1.1-0.3c0-0.1,0.1-0.2,0.4-0.2h0.3c0.4,0,0.9,0,1.3,0s0.7,0,0.9,0c0.2,0,0.7,0,1.3,0c0.6,0,1,0,1.1,0h0.2c0.4,0,0.5,0.1,0.5,0.3c0,0.2-0.3,0.3-0.8,0.3c-0.4,0-0.6,0-0.7,0.1c-0.1,0.1-0.1,0.3-0.1,0.7v5.1h6V347c0-0.7,0-1-0.1-1.1c0-0.3-0.3-0.4-0.6-0.3h-0.6c-0.3,0-0.4-0.1-0.4-0.3c0-0.2,0.2-0.3,0.7-0.3h0.6c0.2,0,0.7,0,1.2,0c0.6,0,1,0,1.2,0c0.5,0,0.9,0,1.1,0h0.4c0.5,0,0.8,0.1,0.8,0.2c0,0.2-0.1,0.3-0.4,0.3s-0.5,0-0.7,0c-0.3,0-0.4,0.1-0.5,0.2c0,0.1-0.1,0.4-0.1,1v11.1c0,0.7,0.1,1.1,0.2,1.2c0.1,0.1,0.5,0.1,1.1,0.1C221.2,359,221.4,359.1,221.4,359.3z"/>
						<path class="p-svg__path2" d="M233.9,353.2h-8.8v-1.7h8.8V353.2z"/>
						<path class="p-svg__path2" d="M259.2,348.4c0,3.8-1.3,6.7-3.9,8.8c-1.9,1.5-4.5,2.3-7.7,2.3c-0.1,0-0.5,0-1.1,0s-1.6,0-2.9,0h-1.6h-2.5c-0.1,0-0.3,0-0.5,0c-0.4,0-0.6-0.1-0.6-0.3c0-0.2,0.3-0.3,1-0.3c0.9,0,1.4-0.2,1.6-0.5c0.1-0.1,0.1-0.6,0.1-1.2V340c0-1-0.1-1.7-0.2-1.8c-0.2-0.2-0.7-0.3-1.6-0.3c-0.5,0-0.7-0.1-0.7-0.4c0-0.2,0.2-0.3,0.5-0.3c0,0,0.2,0,0.7,0c0.5,0,1,0,1.4,0h3.4c3.8,0,6.6,0.3,8.2,0.8c1.9,0.6,3.5,1.9,4.7,3.8C258.6,343.8,259.2,346,259.2,348.4z M255.6,348.3c0-3.6-0.7-6.2-2.1-7.8S250,338,247,338c-1.4,0-2.3,0.2-2.6,0.4c-0.1,0.2-0.2,0.7-0.2,1.5V357c0,0.6,0,1,0,1.1c0,0.1,0.1,0.2,0.3,0.3c0.5,0.3,1.6,0.4,3.2,0.4c2.3,0,4.2-0.8,5.6-2.4C254.9,354.7,255.6,352,255.6,348.3z"/>
						<path class="p-svg__path2"  d="M275.3,356.1c0,0,0,0.2,0,0.4c0,0.2,0,0.5,0,0.7v1.9c0,0.2,0,0.4,0.1,0.6l-5.3-0.1l-6.1,0.1c-0.5,0-0.7-0.1-0.7-0.3c0-0.2,0.1-0.3,0.4-0.3c0.7,0,1.1,0,1.2-0.1c0.1-0.1,0.2-0.4,0.2-1v-11c0-0.9-0.1-1.3-0.2-1.4c-0.1-0.1-0.5-0.1-1.1-0.1c-0.3,0-0.4-0.1-0.4-0.2c0-0.2,0.1-0.3,0.4-0.3h0.8c0.2,0,0.4,0,0.6,0h0.4h0.8c0.1,0,0.6,0,1.6,0c1,0,2.2,0,3.5,0h1.9c0.6,0,1,0,1.4,0v0.2l0,0.5c0,0.3,0.1,1.3,0.3,2.8c0,0.1,0,0.2,0,0.4c0,0.3-0.1,0.4-0.2,0.4c-0.2,0-0.3-0.2-0.4-0.6c-0.3-1.6-0.9-2.6-1.7-2.8c-0.5-0.1-1.6-0.2-3.3-0.2h-1.6v6h0.8c1.4,0,2.2-0.1,2.5-0.3c0.3-0.2,0.5-0.8,0.6-1.8c0.1-0.6,0.2-0.9,0.4-0.9c0.2,0,0.3,0.2,0.3,0.6c0,0.3,0,0.7,0,1.2s0,0.9,0,1.2c0,1.4,0,2.3,0.1,2.8c0,0.2,0,0.3,0,0.4c0,0.3-0.1,0.5-0.3,0.5c-0.2,0-0.3-0.3-0.4-0.8c-0.1-1.2-0.3-1.8-0.6-2.1s-1.1-0.3-2.5-0.3h-0.8v6.9c3.1,0,5-0.1,5.5-0.3c0.8-0.2,1.3-1.3,1.5-3.1c0-0.3,0.1-0.5,0.4-0.5C275.2,355.2,275.3,355.5,275.3,356.1z"/>
						<path class="p-svg__path2"  d="M290.5,355.4c0,1.2-0.5,2.2-1.5,3.1c-1,0.8-2.3,1.3-3.7,1.3c-1.1,0-2.2-0.3-3.4-1c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2,0.1-0.2,0.3s-0.1,0.4-0.1,0.5c0,0.2-0.1,0.2-0.3,0.2c-0.2,0-0.3-0.1-0.3-0.3c0,0,0-0.4,0.1-1c0-0.6,0.1-1.1,0.1-1.5c0-0.2,0-0.5,0-0.8c0-0.4,0-0.6,0-0.8c0-0.4,0.1-0.6,0.3-0.6c0.2,0,0.4,0.3,0.5,1c0.4,2.3,1.7,3.5,3.8,3.5c1.8,0,2.7-0.9,2.7-2.7c0-0.8-0.2-1.4-0.6-1.9c-0.4-0.5-1.3-1-2.5-1.7c-1.6-0.8-2.7-1.4-3.1-1.9c-0.6-0.6-0.9-1.4-0.9-2.3c0-1.2,0.4-2.1,1.3-2.9c0.9-0.8,1.9-1.1,3.2-1.1c0.8,0,1.7,0.2,2.6,0.7c0.1,0.1,0.2,0.1,0.3,0.1c0.1,0,0.2-0.2,0.3-0.5c0-0.3,0.2-0.5,0.4-0.5c0.2,0,0.3,0.1,0.3,0.3c0,0,0,0.1,0,0.3c0,0.3-0.1,0.8-0.1,1.3c0,0.3,0,0.9,0.1,1.7c0,0.1,0,0.2,0,0.3c0,0.3-0.1,0.4-0.3,0.4c-0.2,0-0.3-0.2-0.4-0.6c-0.2-0.9-0.6-1.7-1.2-2.2s-1.3-0.8-2.1-0.8c-1.5,0-2.3,0.8-2.3,2.5c0,0.7,0.2,1.3,0.6,1.8c0.2,0.3,0.4,0.5,0.7,0.6c0.3,0.1,1,0.5,2.2,1.1c1.4,0.7,2.4,1.3,2.9,2C290.2,353.8,290.5,354.6,290.5,355.4z"/>
						<path class="p-svg__path2"  d="M301.4,359.3c0,0.1-0.1,0.2-0.3,0.2h-0.3h-0.7h-0.8c-0.2,0-0.4,0-0.5,0c-0.2,0-0.3,0-0.4,0c-0.2,0-0.6,0-1.2,0c-0.6,0-1,0-1.3,0h-0.1c-0.4,0-0.5-0.1-0.5-0.2c0-0.1,0.2-0.2,0.7-0.2c0.6,0,1-0.1,1-0.2c0-0.1,0-0.6,0-1.4v-10.4c0-0.8,0-1.3-0.1-1.5s-0.2-0.2-0.5-0.2h-0.6h-0.3c-0.2,0-0.3-0.1-0.3-0.2s0.1-0.2,0.4-0.2c0,0,0,0,0.2,0s0.4,0,0.7,0h2.3c0.1,0,0.3,0,0.6,0c0.3,0,0.5,0,0.7,0h0.8c0.3,0,0.5,0.1,0.5,0.3c0,0.1-0.4,0.2-1.1,0.2c-0.3,0-0.5,0-0.5,0.1c-0.1,0.1-0.1,0.4-0.1,0.9v12.1c0,0.2,0.1,0.4,0.2,0.4c0.2,0.1,0.5,0.1,1.1,0.2C301.2,359.1,301.4,359.2,301.4,359.3z"/>
						<path class="p-svg__path2"  d="M320,355.1c0,0.1-0.2,0.2-0.6,0.2h-1c-0.1,0-0.2,0.1-0.2,0.3s-0.1,0.6-0.1,1.2v1.3c-1.4,1.2-3,1.7-4.9,1.7c-2.3,0-4.2-0.7-5.6-2s-2.1-3.1-2.1-5.3c0-2.3,0.7-4.2,2-5.6s3.1-2.1,5.4-2.1c1.2,0,2.4,0.4,3.7,1.1c0.1,0.1,0.2,0.1,0.3,0.1c0.2,0,0.3-0.1,0.4-0.4c0.1-0.4,0.3-0.6,0.4-0.6c0.2,0,0.3,0.1,0.3,0.3c0,0,0,0.1-0.1,0.5c-0.1,0.6-0.1,1.8-0.1,3.7c0,0.5-0.1,0.7-0.4,0.7c-0.2,0-0.3-0.1-0.3-0.4c0-1.4-0.4-2.5-1.2-3.3c-0.7-0.8-1.7-1.2-2.9-1.2c-1.4,0-2.5,0.6-3.4,1.9c-0.8,1.3-1.2,3-1.2,5.2c0,2.1,0.4,3.8,1.2,5s1.9,1.9,3.3,1.9c1.3,0,2.1-0.4,2.4-1.2c0.1-0.3,0.2-0.7,0.2-1.3c0-0.8,0-1.2-0.1-1.3c-0.1-0.1-0.5-0.1-1.2-0.1h-0.2c-0.1,0-0.2,0-0.3,0c-0.2,0-0.3-0.1-0.3-0.2c0-0.2,0.3-0.3,0.8-0.3h0.8c0.2,0,0.4,0,0.7,0c0.3,0,0.5,0,0.5,0c1.5,0,2.3,0,2.6,0h0.6C319.9,354.8,320,354.9,320,355.1z"/>
						<path class="p-svg__path2"  d="M336.9,345.2c0,0.1-0.2,0.2-0.7,0.2c-0.1,0-0.2,0-0.4,0h-0.4c-0.2,0-0.3,0-0.3,0.1s0,0.4,0,0.9v11.8c0,0.8,0,1.2,0,1.4c0,0.1-0.1,0.2-0.3,0.2c-0.2,0-1-0.9-2.3-2.7c-0.1-0.2-0.4-0.6-0.7-1c0-0.1-0.2-0.2-0.4-0.5c-1.1-1.4-3-4.1-5.8-8v10.1c0,0.8,0.1,1.2,0.3,1.3c0.2,0,0.6,0.1,1.2,0.1h0.1c0.3,0,0.4,0.1,0.4,0.2c0,0.2-0.2,0.2-0.7,0.2c-0.1,0-0.4,0-1.1-0.1c-0.3,0-0.6,0-0.9,0c-0.2,0-0.4,0-0.6,0c-0.4,0-0.8,0.1-1.3,0.1c-0.3,0-0.5-0.1-0.5-0.2c0-0.1,0.2-0.2,0.6-0.2h0.3l0.4,0c0.5,0,0.8-0.1,0.8-0.3c0-0.1,0-0.4,0-0.9V349c0-1.6-0.1-2.6-0.3-2.9c-0.3-0.4-0.8-0.6-1.5-0.6c-0.5,0-0.8-0.1-0.8-0.3c0-0.1,0.1-0.2,0.4-0.2h0.1h1.8c0.1,0,0.2,0,0.4,0c0.2,0,0.4,0,0.6,0h1.2l7.6,10.4v-8.9c0-0.5,0-0.8-0.1-0.9c0-0.1-0.2-0.1-0.5-0.1c-0.3,0-0.5,0-0.7,0h-0.2c-0.4,0-0.6-0.1-0.6-0.2c0-0.1,0.1-0.2,0.3-0.2c0.2,0,0.9,0,2.2,0c1.2,0,1.9,0,2,0C336.8,345,336.9,345.1,336.9,345.2z"/>
					</g>
					<g>
						<path class="p-svg__path2" d="M245.6,349.3c-0.3,0-5.1,0-5.3,0h-0.2c-0.4,0-0.7-0.1-0.7-0.4c0-0.4,0.5-0.4,0.8-0.4c0.2,0,4.9,0,6.2,0c1.2,0,1.8,0,2.2,0c0.2,0,0.4,0.1,0.4,0.4c0,0.2-0.2,0.4-0.7,0.4c-0.1,0-0.2,0-0.5,0h-0.4H245.6z"/>
					</g>
				</svg>
			</h1>
			<div class="top-arrow-bottom"><a href="#sec2"><img src="<?php echo COMMON_PFIX; ?>/img/top_arrow_bottom.png" alt="↓"></a></div>
		</header><!--/.sec1-->
