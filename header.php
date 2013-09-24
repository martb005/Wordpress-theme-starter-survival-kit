<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Martin Bussieres">
        <!-- Meta Opengraph -->
        <meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php bloginfo('template_url');?>" />
        <meta property="og:image" content="<?php bloginfo('template_url');?>/img/opengraph.png" />
        <meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css" media="all">
        <!--[if lt IE 9]>
          <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/html5.js"></script>
        <![endif]-->
	</head>
  <body>