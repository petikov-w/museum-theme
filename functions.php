<?php
if (! function_exists('museum_theme_setup')) :
    function museum_theme_setup() {
        // добавление миниатюр
        add_theme_support( 'post-thumbnails', array( 'post', 'lesson' ) );

               // добавление пользовательского логотипа
        add_theme_support( 'custom-logo', [
            'width'       => 163,
            'flex-height' => true,
            'header-text' => 'Universal',
            'unlink-homepage-logo' => false,
        ] );
        // регистрация меню
        register_nav_menus( [
            'header_menu' => 'Меню в шапке',
            'footer_menu' => 'Меню в подвале'
        ] );
    }
endif;

add_action( 'after_setup_theme', 'museum_theme_setup' );


// подключаем стили и скрипты
function enqueue_museum_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'swiper-slider', get_template_directory_uri() . '/assets/css/swiper.min.css','style', time());
    wp_enqueue_style( 'museum-theme', get_template_directory_uri() . '/assets/css/style.css','style', time());
//    wp_enqueue_style( 'Playfair Display', '//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap');
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js',null,time(),true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js','swiper',time(),true);
}

add_action( 'wp_enqueue_scripts', 'enqueue_museum_style' );

// отключаем строку для вызова админ панели вверху сайта
add_filter('show_admin_bar', '__return_false');

//<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
//<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
//		rel="stylesheet">