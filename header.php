<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?> | Marrakesh Hair Care</title>
    <?php wp_head(); ?>
    <!-- Google Analytics -->
</head>
<body <?php body_class(); ?>>
    <div class="site" id="page">
        <header class="header">
            <div class="header-inner">
                <div class="header-logo">
                    <div class="logo"><?php the_custom_logo(); ?></div>
                </div>
                <div class="header-main">
                    <div class="header-top">
                        <p>My account</p>
                        <div class="header-right">
                            <p>Mini cart</p>
                        </div>
                    </div>
                    <div class="header-bot">
                        <div class="logo" style="display:none"><?php the_custom_logo(); ?></div>
                        <div class="box-header-nav megamenu-wrap">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'top-menu',
                                    'menu_class' => 'main-menu'
                                )
                            )?>
                        </div>
                        <div class="block-search">
                            <a href="#" class="woo-search-link" data-toggle="dropdown">
                                <span class="dashicons dashicons-search"></span>
                            </a>
                        </div>
                        <div class="mobile-block block-menu-bar">
                            <a href="#" class="menu-bar menu-toggle">menu</a>
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'top-menu',
                                    'menu_class' => 'main-menu'
                                )
                            )?>
                        </div>
                    </div>
                </div>
            </div>
        </header>