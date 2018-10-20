<!DOCTYPE html>
<php lang="pt-br" class="no-js">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); echo " | "; bloginfo('description');?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- conteudo atomic design -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/geral.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/<?php echo $style; ?>.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/plugins.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/logo-favicon.ico">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/logo70x70.png" />

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<!-- font roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
 
</head>
<body>
	<?php include('includes/organisms/menu-responsivo.php'); ?>
	<div class="layout">
		<header>
			<?php include('includes/organisms/menu.php'); ?>
		</header>

		<main>