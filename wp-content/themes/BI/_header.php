<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?>
      <!DOCTYPE html>
        <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
        <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
        <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
        <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title><?php wp_title( '|', true, 'right' ); ?></title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="" />
            <meta name="keywords" content="" />
            <meta name="author" content="" />


            <!-- Facebook and Twitter integration -->
            <meta property="og:title" content=""/>
            <meta property="og:image" content=""/>
            <meta property="og:url" content=""/>
            <meta property="og:site_name" content=""/>
            <meta property="og:description" content=""/>
            <meta name="twitter:title" content="" />
            <meta name="twitter:image" content="" />
            <meta name="twitter:url" content="" />
            <meta name="twitter:card" content="" />



            <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
            <link rel="shortcut icon" href="favicon.ico">
            <!-- Google Fonts -->
            <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
            <!-- Animate -->
            <link rel="stylesheet" href="wp-content/themes/BI/app/css/animate.css">
            <!-- Flexslider -->
            <link rel="stylesheet" href="wp-content/themes/BI/app/css/flexslider.css">
            <!-- Icomoon -->
            <link rel="stylesheet" href="wp-content/themes/BI/app/css/icomoon.css">
            <!-- Bootstrap  -->
            <link rel="stylesheet" href="wp-content/themes/BI/app/css/bootstrap.css">

            <link rel="stylesheet" href="wp-content/themes/BI/app/css/bootstrap-lightbox.css">

            <link rel="stylesheet" href="wp-content/themes/BI/app/css/bootstrap.css">

            <link rel="stylesheet" href="wp-content/themes/BI/app/css/style.css">



            <!-- Modernizr JS -->
            <script src="wp-content/themes/BI/app/js/modernizr-2.6.2.min.js"></script>
            <!-- FOR IE9 below -->
            <!--[if lt IE 9]>
            <script src="wp-content/themes/BI/js/respond.min.js"></script>
            <![endif]-->

            <?php wp_head(); ?>


