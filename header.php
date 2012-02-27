<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="Content-Type" content="text/html:charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
            <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
    </head>
    <body>
            <!--[if lt IE 8]><p class="warning">You are using an outdated ve    rsion of Internet Explorer. For security reasons you should upgrade your browser (also this site will look a lot nicer!). Please go to Windows Updates and install the latest version.</p><![endif]-->
        <div id="wrapper">
            <div id="header">
            <h1><a href="<?php get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
            <h2><?php bloginfo('description'); ?></h2>
                <div id="navBar">
                    <ul>
                        <?php wp_page_menu('show_home=Home'); ?>
                    </ul>
                </div>
            </div>
            <div id="subwrapper">
                <div id="main">

