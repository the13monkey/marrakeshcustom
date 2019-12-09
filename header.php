<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?> | Marrakesh Hair Care</title>
    <?php wp_head(); ?>
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
                        <div class="logo"><?php the_custom_logo(); ?></div>
                        <div class="box-header-nav megamenu-wrap">
                            <p>Top menu</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>