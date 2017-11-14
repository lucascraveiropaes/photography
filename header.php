<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo("charset"); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

	    <title><?php wp_title('-', 'true', 'right');  bloginfo( 'name' ); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="<?php 
			if ( is_single() ) {
				single_post_title('', true); 
			} 
			else {
				bloginfo('description');
			}
		?>">

		<meta name="description" content="<?php bloginfo("description"); ?>" />
		<meta name="keywords" content="Foto, Fotografia, Photography" />

		<meta name="author" content="Lucas Craveiro Paes" />

	  	<!-- Facebook and Twitter Integration Meta Tags -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- Function calling all styles from functions.php -->
	    <?php get_styles() ?>

		<!-- Theme Style on Root Folder -->
	    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">

		<!-- Add favicon ico on assets/img/ico/ -->
	    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/assets/img/ico/favicon.ico">

	</head>