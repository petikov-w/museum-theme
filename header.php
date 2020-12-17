<!doctype html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Museum</title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open();?>
<header class="header">
    <div class="container">
        <div class="header-wrapper">

            <?php
//            get_template_part( 'template-parts/content', 'header-logo' );

            // Вывод основного меню сайта
//            wp_nav_menu( [
//                'theme_location'  => 'header_menu',
//                'container'       => 'nav',
//                'container_class' => 'header-nav',
//                'menu_class'      => 'header-menu',
//                'echo'            => true,
//            ] );

            // Вывод поля для поискового запроса
            ?>
        </div>
    </div>
</header>