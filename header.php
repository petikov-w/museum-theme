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
<header>


    <div class="container">
        <div class="header-top">
            <div class="row">
                <!--    Логотип-->
                <div class="col-xs-10 col-sm-12	col-md-12 col-lg-4">
                       <?php get_template_part( 'template-parts/content', 'header-logo' ); ?>
                </div>
                <!--    Меню-->
                <div class="col-xs-2 col-sm-12	col-md-12 col-lg-8 header-col">

<!--    ============================= Header Menu =============================-->
<!--                         Вывод основного меню сайта-->
                       <?php
                       wp_nav_menu( [
	                       'theme_location'  => 'header_menu',
	                       'container'       => 'nav',
	                       'container_class' => 'hamburger hamburger3',
	                       'menu_class'      => 'nav-main',
	                       'depth'           => 0,
	                       'echo'            => true,
                       ] );
                       ?>
                        <span class="bar bar1"></span>
                        <span class="bar bar2"></span>
                        <span class="bar bar3"></span>
                        <span class="bar bar4"></span>
<!--    ========================= Header Menu (конец) =========================-->

                </div>
            </div>
        </div>
    </div>

</header>



