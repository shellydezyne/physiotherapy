<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package physiotherapy
 */

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Blue - Ultimate Product Landing Page Template</title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/core-img/favicon.ico">

    <!-- ::::::::::::::::::::::::::: All CSS Files ::::::::::::::::::::::::::: -->

    <!-- Style css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">

    <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>
    <!-- /.end preloader -->

    <!-- ::::::::::::::::::::::::::: Header Start ::::::::::::::::::::::::::: -->
    <header class="header_area">
        <!-- Main Header Area Start -->
        <div class="main_header_area animated">
            <div class="container">
                <div class="row">

                    <div class="col-sm-2 col-xs-9">
                        <!-- Logo Area:: For better view in all device please use logo image max-width 70px -->
                        <div class="logo_area">
                            <a href="<?php bloginfo('template_directory'); ?>/index-video.html"><img src="<?php bloginfo('template_directory'); ?>/img/core-img/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="col-sm-10 col-xs-12">
                        <!-- Menu Area Start -->
                        <div class="main_menu_area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="current_page_item"><a href="/">Home</a></li>
                                        <li><a href="#">Page</a>

                                        </li>
                                        <li><a href="#product">Product</a></li>
                                        <li><a href="#price">Price</a></li>
                                        <li><a href="blog">Blog</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                        <!-- Menu Area End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
    </header>
