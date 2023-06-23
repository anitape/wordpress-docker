<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&family=Lora:wght@600;700&family=Montserrat:wght@400;500;600;700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="offcanvas offcanvas-end offcanvas-lg" id="mobile-menu">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">Heading</h1>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <p>Some text lorem ipsum.</p>
            <p>Some text lorem ipsum.</p>
            <p>Some text lorem ipsum.</p>
            <button class="btn btn-secondary" type="button">A Button</button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
                <img class="my-2" src="/wp-content/uploads/2023/06/everparks-logo.png">
            </div>
            <div class="header-links-all col-sm-11 d-flex flex-wrap justify-content-end align-content-center">
                <?php wp_nav_menu(array('container' => 'nav', 'theme_location' => 'primary', 'menu_class' => 'nav justify-content-center align-content-center')); ?>
                <div class="header-buttons d-flex">
                    <div class="local-btns d-flex gap-2 align-items-center">
                        <a class="local-link">Fi</a> /
                        <a class="local-link">Sv</a> /
                        <a class="local-link">En</a> /
                        <a class="local-link">Ru</a>
                    </div>
                    <button class="main-btn">Osta liput</button>
                </div>
                <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
                    Open Offcanvas Sidebar
                </button>
            </div>
        </div>
    </div>