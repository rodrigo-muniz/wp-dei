<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dei
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>


        <script src="https://use.typekit.net/zuq7yqr.js"></script>
        <script>
            try {
                Typekit.load({
                    async: true
                });
            } catch (e) {
            }
        </script>
    </head>

    <body <?php body_class(); ?>>
        <div id="page-wrap" class="container-fluid">
            <div id="header-wrap" class="row">
                <header>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div id="puc-logo"></div>
                        <div id="acronimo"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 responsive-layout-sm">
                        <nav id="site-navigation"  class="main-navigation navbar navbar-default"  role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'dei'); ?></button>
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                        </nav><!-- #site-navigation -->
                    </div>
                    <div id="bgimage" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <h1 class="text-uppercase page-title">
                            <?php 
                                echo 'Notícias';
                            ?>
                        </h1>	
                    </div>
                </header>	
            </div> <!-- Header End -->



            <div id="content-wrap" class="row">
