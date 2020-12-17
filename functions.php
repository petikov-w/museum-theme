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
    wp_enqueue_style( 'swiper-slider', get_template_directory_uri() . '/assets/css/swiper.min.css','style', time());
    wp_enqueue_style( 'museum-theme', get_template_directory_uri() . '/assets/css/style.css','style', time());
   // wp_enqueue_style( 'Roboto-Slab', '//fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap');
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js',null,time(),true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js','swiper',time(),true);
}

add_action( 'wp_enqueue_scripts', 'enqueue_museum_style' );

// отключаем строку для вызова админ панели вверху сайта
add_filter('show_admin_bar', '__return_false');



//============== SVG - танцы с бубном =====================

//add_filter( 'upload_mimes', 'svg_upload_allow' );
//
//# Добавляет SVG в список разрешенных для загрузки файлов.
//function svg_upload_allow( $mimes ) {
//    $mimes['svg']  = 'image/svg+xml';
//
//    return $mimes;
//}
//
//add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );
//
//# Исправление MIME типа для SVG файлов.
//function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
//
//    // WP 5.1 +
//    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
//        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
//    else
//        $dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );
//
//    // mime тип был обнулен, поправим его
//    // а также проверим право пользователя
//    if( $dosvg ){
//
//        // разрешим
//        if( current_user_can('manage_options') ){
//
//            $data['ext']  = 'svg';
//            $data['type'] = 'image/svg+xml';
//        }
//        // запретим
//        else {
//            $data['ext'] = $type_and_ext['type'] = false;
//        }
//
//    }
//
//    return $data;
//}
//
//
//add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );
//
//# Формирует данные для отображения SVG как изображения в медиабиблиотеке.
//function show_svg_in_media_library( $response ) {
//
//    if ( $response['mime'] === 'image/svg+xml' ) {
//
//        // Без вывода названия файла
//        $response['sizes'] = [
//            'medium' => [
//                'url' => $response['url'],
//            ],
//            // при редактирования картинки
//            'full' => [
//                'url' => $response['url'],
//            ],
//        ];
//    }
//
//    return $response;
//}
//
//============== SVG - танцы с бубном (конец) ====================