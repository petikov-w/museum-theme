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
                    <nav class="hamburger hamburger3">
<!--    ============================= Header Menu =============================-->

                        <ul class="nav-main">
                            <li><a href='#'>Главная</a></li>
                            <li><a class="nav-main_double" href='#'>Музей</a>
                                <ul class="nav-main_double_next">
                                    <li><a href='#'>Выставка</a></li>
                                    <li><a href='#'>Обучение (Программы \ Беседы с родителями)</a></li>
                                    <li><a href='#'>Проекты</a></li>
                                    <li><a href='#'>Коллекции</a></li>
                                    <li><a href='#'>Издания</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>Образовательные программы</a></li>
                            <li><a href='#'>Мастерские</a></li>
                            <li><a href='#'>Афиша</a></li>
                            <li><a href='#'>События</a></li>
                            <li><a href='#'>Контакты</a></li>
                        </ul>
                        <span class="bar bar1"></span>
                        <span class="bar bar2"></span>
                        <span class="bar bar3"></span>
                        <span class="bar bar4"></span>
<!--    ========================= Header Menu (конец) =========================-->
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>



