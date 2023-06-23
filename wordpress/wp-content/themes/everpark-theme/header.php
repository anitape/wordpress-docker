<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="offcanvas offcanvas-end offcanvas-lg" id="mobile-menu">
        <div class="offcanvas-header align-items-start">
            <div>
                <h1 class="main-headline">EVERPARKS</h1>
                <div class="local-btns d-flex gap-2 align-items-center">
                    <a class="local-link">Fi</a> /
                    <a class="local-link">Sv</a> /
                    <a class="local-link">En</a> /
                    <a class="local-link">Ru</a>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between">
            <div>
                <?php wp_nav_menu(array('container' => 'nav', 'theme_location' => 'primary', 'menu_class' => 'nav d-flex flex-column')); ?>
                <button class="main-btn">Osta liput</button>
            </div>
            <img class="mobile-menu-logo align-self-center my-5" src="/wp-content/uploads/2023/06/everparks-logo.png">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-1">
                <img class="my-2" src="/wp-content/uploads/2023/06/everparks-logo.png">
            </div>
            <div class="header-links-all col-11 d-flex justify-content-end align-content-center">
                <div class="desktop-container d-flex flex-wrap justify-content-end">
                    <?php wp_nav_menu(array('container' => 'nav', 'theme_location' => 'primary', 'menu_class' => 'nav justify-content-center align-content-center')); ?>
                    <div class="header-buttons d-flex">
                        <div class="local-btns d-flex gap-2 align-items-center">
                            <a class="local-link">Fi</a> /
                            <a class="local-link">Sv</a> /
                            <a class="local-link">En</a> /
                            <a class="local-link">Ru</a>
                        </div>
                        <button class="main-btn align-self-center">Osta liput</button>
                    </div>
                </div>
                <button class="mobile-menu-button btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
                    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>