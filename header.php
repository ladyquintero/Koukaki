<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> <!-- SWIPER -->
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <ul>
                    <li class="site-title">
                        <a href="<?php echo esc_url(home_url()); ?>" rel="home">Fleurs d'oranger & chats errants</a>
                    </li>
                </ul>
                <div id="custom-container" class="custom-container" aria-controls="primary-menu" aria-expanded="false">
                    <button class="bouton open">
                        <span class="burger"></span>
                        <span class="burger"></span>
                        <span class="burger"></span>
                    </button>
                    <div class="liste-items">
                        <img class="menu-logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
                        <ul>
                            <li class="section-story"><a href="#story">Histoire</a></li>
                            <li class="section-personnages"><a href="#characters">Personnages</a></li>
                            <li class="section-lieu"><a href="#place">Lieu</a></li>
                            <li class="section-studio"><a href="#studio">Studio Koukaki</a></li>
                        </ul>
                        <div class="section-footer-menu">
                            <a href="#">STUDIO KOUKAKI</a>
                        </div>
                    </div>
                </div>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

