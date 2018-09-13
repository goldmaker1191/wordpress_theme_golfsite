<?php
/**
 * The theme header
 *
 * @package bootstrap-basic
 */
?>
	<!DOCTYPE html>
	<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes();?>> <![endif]-->
	<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes();?>> <![endif]-->
	<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes();?>> <![endif]-->
	<!--[if gt IE 8]><!-->
	<html class="no-js" <?php language_attributes();?>>
	<!--<![endif]-->

	<head>
		<meta charset="<?php bloginfo('charset');?>"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width"/>
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"/>

		<!--wordpress head-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/becomeamember/ionicons.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/becomeamember/foundation.min.css"  />
        <?php wp_head();?>
	</head>
	<body <?php body_class();?>>